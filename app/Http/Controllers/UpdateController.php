<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function  index() {
        
        return view('app_admin.client_app.update');
    }
}
