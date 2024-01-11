<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function signIn()
    {
        if(Auth::check()){
            return $this->redirectTo('home');
        }

        return view('sign-in');
    }

    public function signUp()
    {
        return view('sign-up');
    }

    public function signOut(Request $request)
    {
        Auth::logout();
        $request->session()->flush();

        return $this->redirectTo('sign-in');
    }

    public function storeUser(UserRequest $request, User $user)
    {
        $user->store($request);

        return back()->with('success', 'Successfully registered.');
    }

    public function authUser(Request $request)
    {
        $credentials = ['email' => $request->email, 'password' => $request->password];

        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();

            return $this->redirectTo('home');
        }

        return back()->with('error', 'Invalid credentials.');
    }

    private function redirectTo($route)
    {
        return redirect()->intended(route($route));
    }
}
