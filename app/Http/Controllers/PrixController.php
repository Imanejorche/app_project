<?php

namespace App\Http\Controllers;
use App\Models\Prix;
use Illuminate\Http\Request;

class PrixController extends Controller
{
    public function index ()
    
    {
        $prixs = Prix::orderBy('created_at', 'desc')->get();
        return view('app_admin.settings.niveauprix', compact('prixs'));

    }

    public function destroy($id)
   
    {
        $prix = Prix::findOrFail($id);
        $prix->delete();

        return redirect()->route('prix');
    }

    public function show($id)
    {
        $prix = Prix::findOrFail($id);
        

        return view('app_admin.settings.updateprix', compact('prix'));
    }

    public function update(Request $request, $id)
    {
        $prix = Prix::findOrFail($id);
          
        $request->validate([
            'nom' => 'required|string',
            'type' => 'required|string|in:sales,purchases',
        ]);
    
        $prix->update([
            'nom' => $request->input('nom'),
            'type' => $request->input('type'),
        ]);
    
        return redirect()->route('prix');
    }
    




}
    

