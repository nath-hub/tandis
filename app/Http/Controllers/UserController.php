<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Enterprise;
use App\Models\Invest;
use App\Models\Phase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('register', compact('users'));
    }

    public function create()
    {
        return view('register');
    }
    public function store(UserStoreRequest $request)
    {
        $estAdmin = $request->type;

        if ($estAdmin === "on") {
            $role = 'ENTERPRISE';
        } else {
            $role = 'INVEST';
        }

        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "type" => $role,
            "photo" => $request->photo,
            "password" => Hash::make($request->password),
        ]);

        if ($role === "ENTERPRISE") {
            Enterprise::create([
                "user_id" => $user->id,
                "web_site" => $request->web_site,
                "name_enterprise" => $request->name_enterprise,
                "address" => $request->address,
            ]);
        }

        return redirect('login')->with('success', 'User created successfully.');

    }

    public function log()
    {
        return view('login');
    }


    public function login(UserStoreRequest $request)
    {

        $user = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);


        $validate = User::where('email', $user['email'])->first();

        // if (!empty($validate) && $validate->email_verified_at != null) {
        // if (Auth::attempt(['email' => $user['email'], 'password' => $user['password']])) {

        if (Auth::loginUsingId($validate->id)) {
            $request->session()->regenerate();

            return redirect('/');


        }

        // }else{
        //     return back()->withErrors([
        //         'email' => 'Veuillez verifier votre compte en validant votre adresse mail',
        //     ]);
        // }




    }


    public function show(User $user)
    {
        $entreprises = $user->invests;

        if (count($entreprises) > 0) {
            foreach ($entreprises as $item) {
                $invest = Invest::with('entreprise')->where('user_id', $user->id)->where('enterprise_id', $item->id)->get();

                $items[] = $item;
            }
            $invests = $invest;
        } else {
            $invests = null;
            $items = null;
        }
        ;
        $enterprise = Enterprise::where('user_id', $user->id)->first();

        $phase = Phase::where('enterprise_id', $enterprise->id)->where('statut_phase', "En-cour")->get();

        return view('users.show', [
            'user' => $user,
            'photo' => asset("$user->photo"),
            'enterprise' => $enterprise,
            'invest' => $invests,
            'enterprises' => $items,
            "phase" => $phase
        ]);
    }
    public function edit(user $user)
    {
        $enterprise = Enterprise::where('user_id', $user->id)->first();

        return redirect()->route('users.edit', [
            'user' => $user,
            'enterprise' => $enterprise
        ]);
    }
    public function update(UserUpdateRequest $request, User $user)
    {
        // dd($request->all());

        if (empty($request->file('photo'))) {
            if (empty($user->photo)) {
                $avatarPath = ('assets/images/pp.jpg');

            } else {
                $avatarPath = $user->photo;
            }

        } else {
            $avatarPath = $request->photo->store('users/tmp', 'public');
        }

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->town = $request->town;
        $user->country = $request->country;
        $user->birth_date = $request->birth_date;
        $user->type = $request->type;
        $user->photo = $avatarPath;

        $user->save();
        $enterprise = Enterprise::where('user_id', $user->id)->first();
        return redirect()->route('users.show', [
            'user' => $user,
            'photo' => asset("$user->photo"),
            'enterprise' => $enterprise
        ])->with('success', 'Utilisateur mis à jour avec succès !');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'user deleted successfully');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
