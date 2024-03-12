<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
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
        
        User::create($request->all());
   
        return redirect()->route('users.show')->with('success','User created successfully.');
    }
    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }
    public function edit(user $user)
    {
        return view('users.edit', compact('user'));
    }
    public function update(UserUpdateRequest $request, User $user)
    {
        $user->update($request->all());
  
        return redirect()->route('users.index')->with('success','user updated successfully');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success','user deleted successfully');
    }
}
