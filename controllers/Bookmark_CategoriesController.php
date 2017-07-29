<?php

namespace App\Controllers;


use App\Core\App;

class Bookmark_CategoriesController
{


    public function index()
    {
        $bookmark_categories = App::get('database')->getAllBookmark_Categories();
        return view('/admin/bookmark_categories/index', compact('bookmark_categories'));
    }

    public function create()
    {
        $bookmark_categories = App::get('database')->getAll('bookmark_categories');
        $users = App::get('database')->getAll('users');

        return view('/admin/bookmark_categories/create', compact('users','bookmark_categories'));
    }


    public function store()
    {
        App::get('database')->insert('bookmark_categories', [
            'title' => $_POST['title'],
            'user_id' => $_POST['user']
        ]);


        return redirect('/admin/bookmark_categories');
    }

    public function edit()
    {

        $category = App::get('database')->find('bookmark_categories', $_GET['id']);

        $users = App::get('database')->getAll('users');

        return view('/admin/bookmark_categories/edit', compact( 'category','users'));
    }


    public function update()
    {
        App::get('database')->update('bookmark_categories', [
            'title' => $_POST['title'],
            'user_id' => $_POST['user']
        ], $_POST['id']);

        return redirect('/admin/bookmark_categories');
    }

    public function delete()
    {
        $id = (int) $_GET['id'];

        if(! is_int($id)) return;

        App::get('database')->delete('bookmark_categories', $id);

        return redirect('/admin/bookmark_categories');

    }


}