<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::oldest()->get();
        return view('admin.users.index', compact('users'));
    }

    public function addUser()
    {
        return view('admin.users.create',['user' => new User()]);
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:users',
            'phone' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'role' => 'required',
        ]);


        User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('alluser')->with('message', "User added successfully!");
    }

    public function editUser($id)
    {
        $user_info = User::findOrFail($id);
        return view('admin.users.edit',['user' => new User()], compact('user_info'));
    }

    public function updateUser(Request $request)
{
    $user_id = $request->user_id;
    $request->validate([
        'name' => 'required|unique:users,name,' . $user_id,
        'phone' => 'required',
        'email' => 'required|email|unique:users,email,' . $user_id,
        'password' => 'required',
        'role' => 'required',
    ]);

    $user = User::findOrFail($user_id);
    $user->update([
        'name' => $request->name,
        'phone' => $request->phone,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => $request->role,
    ]);

    return redirect()->route('alluser')->with('message', "User updated successfully!");
}


    public function deleteUser($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('alluser')->with('message', "User deleted successfully");
    }
}
