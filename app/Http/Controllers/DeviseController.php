<?php

namespace App\Http\Controllers;
use App\Models\Devise;
use Illuminate\Http\Request;

class DeviseController extends Controller
{
    public function index ()
    
    {
        $devises = Devise::orderBy('created_at', 'desc')->get();
        return view('app_admin.settings.devises', compact('devises'));

    }

    public function destroy($id)
   
    {
        $devise = Devise::findOrFail($id);
        $devise->delete();

        return redirect()->route('devises');
    }

    public function show($id)
    {
        $devise = Devise::findOrFail($id);
        

        return view('app_admin.settings.updatedevise', compact('devise'));
    }

    public function update(Request $request, $id)
    {
        $devise = Devise::findOrFail($id);
          
        $request->validate([
            'devise' => 'required|string',
            'tauxchange' => 'required|numeric',
        ]);
    
        $devise->update([
            'devise' => $request->input('devise'),
            'tauxchange' => $request->input('tauxchange'),
        ]);
    
        return redirect()->route('devises');
    }
    




}


