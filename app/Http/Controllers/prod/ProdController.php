<?php

namespace App\Http\Controllers\prod;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdController extends Controller
{
    public function  index() {
       
        return view('app_admin.prod_app.produit');
    }
}
