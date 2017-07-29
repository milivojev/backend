<?php
function dd($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die;
}

function view($viewname, $data = []) {
    extract($data);
    return require "views/{$viewname}.view.php";
}

function redirect($path) {
    header("Location: {$path}");
}

function get_header(){
    return require "views/partials/header.view.php";
}

function get_plain_header(){
    return require "views/partials/plain-header.view.php";
}
function get_form_header(){
    return require "views/partials/forms-header.view.php";
}
function get_admin_header(){
    return require "./views/admin/partials/header.view.php";

}
function get_footer(){
    return require "./views/partials/footer.view.php";
}
function get_admin_footer(){
    return require "./views/admin/partials/footer.view.php";
}
function get_form_footer(){
    return require "./views/partials/forms-footer.view.php";
}

function json($data){
    header('Content-Type: application/json; charset=UTF-8');
    echo json_encode($data);
}