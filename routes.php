<?php
$router->get('login', 'AuthController@showLoginForm');
$router->post('login', 'AuthController@authenticateUser');

$router->get('logout', 'AuthController@logout');

$router->get('', 'PagesController@home', true);

$router->get('posts', 'PostsController@index', true);
$router->get('posts/create', 'PostsController@create');
$router->post('posts', 'PostsController@store');
$router->get('posts/edit', 'PostsController@edit');
$router->post('posts/update', 'PostsController@update');
$router->get('posts/delete', 'PostsController@delete');



$router->get('shooting_categories', 'CategoriesController@index');
$router->get('shooting_categories/create', 'CategoriesController@create');
$router->post('shooting_categories', 'CategoriesController@store');
$router->get('shooting_categories/edit', 'CategoriesController@edit');
$router->post('shooting_categories/update', 'CategoriesController@update');
$router->get('shooting_categories/delete', 'CategoriesController@delete');


$router->get('users', 'UsersController@index', true);

//API
$router->get('api/users', 'UsersController@apiIndex', true);
$router->get('api/time', 'UsersController@dateTime', true);

$router->post('api/customers/change-user', 'CustomersController@changeUser', true);

//ADMIN
//home
$router->get('admin/home', 'PagesAdminController@home', true);

//shootings
$router->get('admin/shootings', 'ShootingsController@index', true);
$router->get('admin/shootings/create', 'ShootingsController@create',true);
$router->post('admin/shootings', 'ShootingsController@store',true);
$router->get('admin/shootings/edit', 'ShootingsController@edit',true);
$router->post('admin/shootings/update', 'ShootingsController@update',true);
$router->get('admin/shootings/delete', 'ShootingsController@delete',true);
//customers
$router->get('admin/customers', 'CustomersController@index', true);
$router->get('admin/customers/create', 'CustomersController@create',true);
$router->post('admin/customers', 'CustomersController@store',true);
$router->get('admin/customers/edit', 'CustomersController@edit',true);
$router->post('admin/customers/update', 'CustomersController@update',true);
$router->get('admin/customers/delete', 'CustomersController@delete',true);

//shooting shooting_categories
$router->get('admin/shooting_categories', 'Shooting_CategoriesController@index',true);
$router->get('admin/shooting_categories/create', 'Shooting_CategoriesController@create',true);
$router->post('admin/shooting_categories', 'Shooting_CategoriesController@store',true);
$router->get('admin/shooting_categories/edit', 'Shooting_CategoriesController@edit',true);
$router->post('admin/shooting_categories/update', 'Shooting_CategoriesController@update',true);
$router->get('admin/shooting_categories/delete', 'Shooting_CategoriesController@delete',true);
//users
$router->get('admin/users', 'UsersAdminController@index', true);
$router->get('admin/users/create', 'UsersAdminController@create',true);
$router->post('admin/users', 'UsersAdminController@store',true);
$router->get('admin/users/edit', 'UsersAdminController@edit',true);
$router->post('admin/users/update', 'UsersAdminController@update',true);
$router->get('admin/users/delete', 'UsersAdminController@delete',true);
//bookmarks
$router->get('admin/bookmarks', 'BookmarksController@index', true);
$router->get('admin/bookmarks/create', 'BookmarksController@create',true);
$router->post('admin/bookmarks', 'BookmarksController@store',true);
$router->get('admin/bookmarks/edit', 'BookmarksController@edit',true);
$router->post('admin/bookmarks/update', 'BookmarksController@update',true);
$router->get('admin/bookmarks/delete', 'BookmarksController@delete',true);
//bookmark categories
$router->get('admin/bookmark_categories', 'Bookmark_CategoriesController@index', true);
$router->get('admin/bookmark_categories/create', 'Bookmark_CategoriesController@create',true);
$router->post('admin/bookmark_categories', 'Bookmark_CategoriesController@store',true);
$router->get('admin/bookmark_categories/edit', 'Bookmark_CategoriesController@edit',true);
$router->post('admin/bookmark_categories/update', 'Bookmark_CategoriesController@update',true);
$router->get('admin/bookmark_categories/delete', 'Bookmark_CategoriesController@delete',true);
