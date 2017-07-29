<?php

namespace App\Controllers;


use App\Core\App;

class PostsController
{

    public function index()
    {
        $posts = App::get('database')->getAllPosts();

        return view('posts/index', compact('posts'));
    }

    public function create()
    {
        $users = App::get('database')->getAll('users');
        $categories = App::get('database')->getAll('shooting_categories');

        return view('posts/create', compact('users', 'categories'));
    }

    public function store()
    {
        App::get('database')->insert('posts', [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'user_id' => $_POST['user_id'],
            'category_id' => $_POST['category_id'],
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);

        return redirect('/posts');
    }

    public function edit()
    {

        $post = App::get('database')->find('posts', $_GET['id']);

        $users = App::get('database')->getAll('users');
        $categories = App::get('database')->getAll('shooting_categories');
        return view('posts/edit', compact('users', 'categories', 'post'));
    }


    public function update()
    {
        App::get('database')->update('posts', [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'user_id' => $_POST['user_id'],
            'category_id' => $_POST['category_id'],
            'updated_at' => date('Y-m-d')
        ], $_POST['id']);

        return redirect('/posts');
    }

    public function delete()
    {
        $id = (int) $_GET['id'];

        if(! is_int($id)) return;

        App::get('database')->delete('posts', $id);

        return redirect('/posts');

    }
}