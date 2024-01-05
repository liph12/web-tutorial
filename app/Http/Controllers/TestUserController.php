<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TestUser;

class TestUserController extends Controller
{
    public function signUp()
    {
        return view('sign-up');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email|unique:test_users',
            'gender' => 'required',
        ]);

        $newUser = [
            'name' => $request->name, 
            'email' => $request->email, 
            'gender' => $request->gender
        ];

        TestUser::create($newUser);

        return back();
    }
}
