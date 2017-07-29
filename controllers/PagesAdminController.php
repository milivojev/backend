<?php

namespace App\Controllers;

use App\Core\App;

class PagesAdminController {
    public function home() {

        return view('admin/home/index');
    }


}