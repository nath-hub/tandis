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
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user
        ]);
    }
    public function edit(user $user)
    {
        return view('users.edit', [
            'user' => $user
        ]);
    }
    public function update(UserUpdateRequest $request, User $user)
    {
        $user->update($request->validated());

        return redirect()->route('users.index')->with('success', 'user updated successfully');
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
