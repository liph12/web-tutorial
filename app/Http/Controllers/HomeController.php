<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TestUser;

class HomeController extends Controller
{
    public function contentView(Request $request)
    {
        $email = $request->email;
        $user = TestUser::where('email', '=', $email)->first();

        return view('home', compact('user'));
    }
}
