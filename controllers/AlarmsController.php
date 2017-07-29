<?php
/**
 * Created by PhpStorm.
 * User: Web Server
 * Date: 7/6/2017
 * Time: 4:38 PM
 */

namespace App\Controllers;


use App\Core\App;

class AlarmsController
{
    public function index()
    {
        $alarms = App::get('database')->getAll('alarms');

        return view('/admin/shooting_categories/index', compact('alarms'));
    }

    public function create()
    {
           $alarms = App::get('database')->getAll('alarms');

        return view('/admin/shooting_categories/create', compact( 'shooting_categories'));
    }

    public function store()
    {
        App::get('database')->insert('shooting_categories', [
            'category' => $_POST['category']
        ]);

        return redirect('/admin/shooting_categories');
    }

    public function edit()
    {

        $category= App::get('database')->find('shooting_categories', $_GET['id']);


        return view('/admin/shooting_categories/edit', compact('category'));
    }


    public function update()
    {
        App::get('database')->update('shooting_categories', [
            'category' => $_POST['category']
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