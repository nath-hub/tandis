<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Enterprise;
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

        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        User::where('email', $credentials);

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'informations de connexion incorrect. verifier si vous avez un compte',
        ]);
    }


    public function show(User $user)
    {
        $enterprise = Enterprise::where('user_id', $user->id)->first();
        return view('users.show', [
            'user' => $user,
            'photo' => asset("$user->photo"),
            'enterprise' => $enterprise
        ]);
    }
    public function edit(user $user)
    {
        $enterprise = Enterprise::where('user_id', $user->id)->first();

        return view('users.edit', [
            'user' => $user,
            'photo' => asset("$user->photo"),
            'enterprise' => $enterprise
        ]);
    }
    public function update(UserUpdateRequest $request, User $user)
    {
        // dd($request->all());

        if (empty ($request->file('photo'))) {
            $avatarPath = $user->photo;
        } else {
            $avatarPath = $request->photo->store('users/tmp', 'public');
        }

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->town = $request->towns;
        $user->country = $request->countrys;
        $user->birth_date = $request->birth_dates;
        $user->type = $request->type;
        $user->photo = $avatarPath;

        $user->save();
        $enterprise = Enterprise::where('user_id', $user->id)->first();
        return view('users.show', [
            'user' => $user,
            'photo' => asset("$user->photo"),
            'enterprise' => $enterprise
        ]);
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
