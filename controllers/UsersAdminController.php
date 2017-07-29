<?php

namespace App\Controllers;


use App\Core\App;

class UsersAdminController
{

    public function index()
    {
        $users = App::get('database')->getAll('users');
        $roles = App::get('database')->getAll('roles');

        return view('/admin/users/index', compact('users','roles'));
    }
//


    public function create()
    {
        $users = App::get('database')->getAll('users');
        $roles = App::get('database')->getAll('roles');

        return view('/admin/users/create', compact('users','roles'));
    }


    public function store()
    {
        App::get('database')->insert('users', [
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'role_id' => $_POST['role'],
            'name' => $_POST['name'],
            'logo' => $_POST['logo'],
            'facebook' => $_POST['facebook'],
            'instagram' => $_POST['instagram'],
            'gmail'=> $_POST['gmail'],
            'youtube'=> $_POST['youtube']
        ]);


        return redirect('/admin/users');
    }

    public function edit()
    {

        $user = App::get('database')->find('users', $_GET['id']);


        $roles = App::get('database')->getAll('roles');

        return view('/admin/users/edit', compact( 'user','roles'));
    }


    public function update()
    {

      App::get('database')->update('users', [
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'role_id' => $_POST['role'],
            'name' => $_POST['name'],
            'logo' => $_POST['logo'],
            'facebook' => $_POST['facebook'],
            'instagram' => $_POST['instagram'],
            'gmail'=>$_POST['gmail'],
            'youtube'=>$_POST['youtube']
        ], $_POST['id']);

        return redirect('/admin/users');
    }

    public function delete()
    {
        $id = (int) $_GET['id'];

        if(! is_int($id)) return;

     App::get('database')->delete('users', $id);


        return redirect('/admin/users');

    }


}

