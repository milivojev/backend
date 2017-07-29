<?php

namespace App\Controllers;


use App\Core\App;

class UsersController
{
    public function index()
    {
        $users = App::get('database')->getAll('users');

        return view('users/index', compact('users'));
    }

    //API

    public function apiIndex()
    {
        $users = App::get('database')->getAll('users');
        return json($users);
    }

    public function dateTime(){
        return json([
            'date' => date('d. m. Y H:i')
        ]);
    }
}