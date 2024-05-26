<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users', compact('users'));
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('user', compact('user'));
    }

    public function create()
    {
        return view('create-user');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->gender = $request->input('gender');
        $user->age = $request->input('age');
        $user->birthdate = $request->input('birthdate');
        $user->address = $request->input('address');
        $user->save();
        return redirect()->route('users');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('edit-user', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->gender = $request->input('gender');
        $user->age = $request->input('age');
        $user->birthdate = $request->input('birthdate');
        $user->address = $request->input('address');
        $user->save();
        return redirect()->route('users');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users');
    }
}