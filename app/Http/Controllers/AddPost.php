<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AddPost extends Controller
{
    public function addTitle() {

        $users = User::all();

        return view('posts', ['title' => 'Posts page', 'post' => 'I can post',
                              'drek' => 'drekarim', 'users' => $users]);
    }

    public function store() {

        $name = Request::get('name');
        $email = Request::get('email');
        $password = Request::get('password');

        $user = New User;
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;

        $user->save();

        return $user;
    }

}
