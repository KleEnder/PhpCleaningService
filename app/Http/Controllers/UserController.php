<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use View;

class UserController extends Controller
{
    public function listUsers() {
        dump(User::all());

        $users = User::all();

        //return view('posts', [ 'users' => $users]);

        //return View::make('user.list', ['users' => $users])
        return View::make('user.list', ['users' => $users]);

        //return view('user.list', ['users' => $users]);

        echo "dela kot krompir";
        exit;


    }

    public function listaUserjev() {
        echo "It works" . "<br>";
        $users = User::all();
        return View::make('user.list', ['users' => $users]);
    }

    public function search() {
        echo("dela");

        //$users = User::all();

        return View::make('user.search', []);

    }
}
