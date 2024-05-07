<?php

namespace App\Http\Controllers;
use App\Models\Prix;
use Illuminate\Http\Request;

class CreateprixController extends Controller
{
    
    public function inde ()
    
    {

        return view('app_admin.settings.createprix');

    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'type' => 'required|string|in:sales,purchases',
        ]);

        Prix::create([
            'nom' => $request->nom,
            'type' => $request->type,
        ]);

        return redirect()->route('prix');
    }


}
