<?php

namespace App\Controllers;


use App\Core\App;

class AuthController
{
    public function showLoginForm()
    {
        return view('auth/login-form');
    }


    public function authenticateUser()
    {

        $user = App::get('database')->authenticate($_POST['email'], md5($_POST['password']));
        if(!$user) {
            return redirect('/login');
        }

        $_SESSION['user'] = $user;
        if ($user->role_id == 1) {
            return redirect('/admin/home');
        } else {
            return redirect('/');
        }


    }

    public function logout()
    {
        unset($_SESSION['user']);
        return redirect('/login');
    }
}