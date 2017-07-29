<?php

namespace App\Controllers;


use App\Core\App;

class BookmarksController
{

//    public function index()
//    {
//        $posts = App::get('database')->getAllPosts();
//
//        return view('admin/posts/index', compact('posts'));
//    }
    public function index()
    {
        $bookmarks = App::get('database')->getAllBookmarks();
        return view('/admin/bookmarks/index', compact('bookmarks'));
    }

    public function create()
    {
        $bookmarks = App::get('database')->getAll('bookmarks');
        $categories = App::get('database')->getAll('bookmark_categories');

        $users = App::get('database')->getAll('users');

        return view('/admin/bookmarks/create', compact('bookmarks', 'categories','customers','alarms','users'));
    }


    public function store()
    {
        App::get('database')->insert('bookmarks', [
            'bookmark_category_id' => $_POST['category'],
            'user_id' => $_POST['user'],
            'description' => $_POST['description'],
            'title' => $_POST['title'],
            'link' => $_POST['link'],
//
        ]);


        return redirect('/admin/bookmarks');
    }

    public function edit()
    {

        $bookmark = App::get('database')->find('bookmarks', $_GET['id']);
        $categories = App::get('database')->getAll('bookmark_categories');
        $users = App::get('database')->getAll('users');

        return view('/admin/bookmarks/edit', compact( 'categories','users','bookmark'));
    }


    public function update()
    {
        App::get('database')->update('bookmarks', [
            'bookmark_category_id' => $_POST['category'],
            'user_id' => $_POST['user'],
            'description' => $_POST['description'],
            'title' => $_POST['title'],
            'link' => $_POST['link'],
        ], $_POST['id']);

        return redirect('/admin/bookmarks');
    }

    public function delete()
    {
        $id = (int) $_GET['id'];

        if(! is_int($id)) return;

        App::get('database')->delete('bookmarks', $id);

        return redirect('/admin/bookmarks');

    }


}