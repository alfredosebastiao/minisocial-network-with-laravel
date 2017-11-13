<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($username){
        $user = User::whereUsername($username)->first();

        return view('user.profile', compact('user'));
    }

    public function edit($username){
        $user = User::whereUsername($username)->first();

        return view('user.edit', compact('user'));
    }
}
