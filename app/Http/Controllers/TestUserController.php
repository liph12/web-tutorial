<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestUserRequest;
use App\Models\TestUser;

class TestUserController extends Controller
{
    public function signUp()
    {
        return view('sign-up');
    }

    public function storeUser(TestUserRequest $request, TestUser $user)
    {
        $user->store($request);

        return back();
    }
}
