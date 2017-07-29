<?php

namespace App\Controllers;


use App\Core\App;

class ShootingsController
{

//    public function index()
//    {
//        $posts = App::get('database')->getAllPosts();
//
//        return view('admin/posts/index', compact('posts'));
//    }
        public function index()
    {
        $shootings = App::get('database')->getAllShootings();
        return view('/admin/shootings/index', compact('shootings'));
    }

    public function create()
    {
        $shootings = App::get('database')->getAll('shootings');
        $categories = App::get('database')->getAll('shooting_categories');
        $customers = App::get('database')->getAll('customers');
        $alarms = App::get('database')->getAll('alarms');
        $users = App::get('database')->getAll('users');

        return view('/admin/shootings/create', compact('shootings', 'categories','customers','alarms','users'));
    }


    public function store()
    {
         App::get('database')->insert('shootings', [
            'shooting_category_id' => $_POST['category'],
            'user_id' => $_POST['user'],
            'customer_id' => $_POST['customer'],
            'description' => $_POST['description'],
            'price' => $_POST['price'],
            'expences' => $_POST['expences'],
//            'event_date' => $_POST['eventdate'],
            'date_created' => date('Y-m-d'),
            'notes' => $_POST['notes'],
            'alarm_id'=>$_POST['alarm']
        ]);


        return redirect('/admin/shootings');
    }

    public function edit()
    {

        $shooting = App::get('database')->find('shootings', $_GET['id']);
        $categories = App::get('database')->getAll('shooting_categories');
        $customers = App::get('database')->getAll('customers');
        $alarms = App::get('database')->getAll('alarms');
        $users = App::get('database')->getAll('users');

        return view('/admin/shootings/edit', compact( 'categories','customers','alarms','users','shooting'));
    }


    public function update()
    {
       App::get('database')->update('shootings', [
            'shooting_category_id' => $_POST['category'],
            'user_id' => $_POST['user'],
            'customer_id' => $_POST['customer'],
            'description' => $_POST['description'],
            'price' => $_POST['price'],
            'expences' => $_POST['expences'],
//            'event_date' => $_POST['eventdate'],
            'date_created' => date('Y-m-d'),
            'notes' => $_POST['notes'],
            'alarm_id'=>$_POST['alarm']
        ], $_POST['id']);

        return redirect('/admin/shootings');
    }

    public function delete()
    {
        $id = (int) $_GET['id'];

        if(! is_int($id)) return;

        App::get('database')->delete('shootings', $id);

        return redirect('/admin/shootings');

    }


}