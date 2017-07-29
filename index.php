<?php
require "vendor/autoload.php";
require "core/bootstrap.php";


use App\Core\Request;
use App\Core\Router;

Router::load('routes.php')
    ->direct(Request::uri(), Request::method());


