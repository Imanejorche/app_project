<?php

namespace App\Http\Controllers;
use App\Models\Devise;
use Illuminate\Http\Request;

class CreatedevisController extends Controller
{
    public function index () {

        return view('app_admin.settings.create');  
}

public function store(Request $request)
{
    $request->validate([
        'devise' => 'required|string',
        'tauxchange' => 'required|numeric',
    ]);

    Devise::create([
        'devise' => $request->devise,
        'tauxchange' => $request->tauxchange,
    ]);

    return redirect()->route('devises');
}
}



