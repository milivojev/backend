<?php
/**
 * Created by PhpStorm.
 * User: Web Server
 * Date: 7/6/2017
 * Time: 4:38 PM
 */

namespace App\Controllers;


use App\Core\App;

class CategoriesController
{
    public function index()
    {
        $categories = App::get('database')->getAll('shooting_categories');

        return view('/admin/shooting_categories/index', compact('categories'));
    }

    public function create()
    {
           $categories = App::get('database')->getAll('shooting_categories');

           $users = App::get('database')->getAll('users');


        return view('/admin/shooting_categories/create', compact( 'categories','users'));
    }

    public function store()
    {
        App::get('database')->insert('shooting_categories', [
            'title' => $_POST['category'],
            'user_id'=> $_POST['user']
        ]);

        return redirect('/admin/shooting_categories');
    }

    public function edit()
    {

        $category= App::get('database')->find('shooting_categories', $_GET['id']);
        $users = App::get('database')->getAll('users');



        return view('/admin/shooting_categories/edit', compact('category','users'));
    }


    public function update()
    {
        App::get('database')->update('shooting_categories', [
            'title' => $_POST['category'],
            'user_id'=> $_POST['user']

        ], $_POST['id']);

        return redirect('/admin/shooting_categories');
    }

    public function delete()
    {
        $id = (int) $_GET['id'];

        if(! is_int($id)) return;

        App::get('database')->delete('shooting_categories', $id);

        return redirect('/admin/shooting_categories');

    }
}