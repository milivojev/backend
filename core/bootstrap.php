<?php
session_start();
require 'functions.php';


//if(!isset($_SESSION['user']) && \App\Core\Request::uri() != "login") {
//    redirect('/login');
//}

use App\Core\App;
use App\Core\Database\Connection;
use App\Core\Database\QueryBuilder;


App::bind('config', require 'config.php');

App::bind('database',  new QueryBuilder(
    Connection::make(App::get('config')['database'])
));




