<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users', compact('users'));
    }

    public function create(Request $request)
    {

        $name = $request->input('name');
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));


        User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]);

        return redirect('/users');
    }

    public function delete($id)
    {

        $user = User::find($id);
        if ($user) {
            $user->delete();
        }
        return redirect('/users');
    }

    public function edit($id)
    {

        $user = User::find($id);
        $users = User::all();
        return view('users', compact('user', 'users'));
    }

    public function update(Request $request)
    {

        $id = $request->input('id');
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password') ? Hash::make($request->input('password')) : null;

        $user = User::find($id);
        if ($user) {
            $user->name = $name;
            $user->email = $email;
            if ($password) {
                $user->password = $password;
            }
            $user->save();
        }

        return redirect('/users');
    }
}