<?php

namespace App\Controllers;


use App\Core\App;

class CustomersController
{

    public function index()
    {


        $customers = App::get('database')->getAllCustomers();

        return view('admin/customers/index', compact('customers'));
    }
//        public function index()
//    {
//        $shootings = App::get('database')->getAllShootings();
//        return view('/admin/shootings/index', compact('shootings'));
//    }

    public function create()
    {
        $customers = App::get('database')->getAll('customers');
        $users = App::get('database')->getAll('users');


        return view('/admin/customers/create', compact('customers','users'));
    }

    public function store()
    {
         App::get('database')->insert('customers', [
            'first_name' => $_POST['firstName'],
            'last_name' => $_POST['lastName'],
            'nick_name' => $_POST['nickName'],
            'phone' => $_POST['phone'],
            'email' => $_POST['email'],
            'adress' => $_POST['adress'],
             'user_id'=>$_POST['user']

        ]);


        return redirect('/admin/customers');
    }

    public function edit()
    {

        $customer = App::get('database')->find('customers', $_GET['id']);


        return view('/admin/customers/edit', compact( 'customer'));
    }


    public function update()
    {
       App::get('database')->update('customers', [
           'first_name' => $_POST['firstName'],
           'last_name' => $_POST['lastName'],
           'nick_name' => $_POST['nickName'],
           'phone' => $_POST['phone'],
           'email' => $_POST['email'],
           'adress' => $_POST['adress'],
        ], $_POST['id']);

        return redirect('/admin/customers');
    }

    public function delete()
    {
        $id = (int) $_GET['id'];

        if(! is_int($id)) return;

        App::get('database')->delete('customers', $id);

        return redirect('/admin/customers');

    }

    //API

    public function changeUser (){
        App::get('database')->update('shootings', [
            'user_id' => $_POST['userId']
        ], $_POST['id']);
    }

}