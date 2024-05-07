<?php

namespace App\Http\Controllers;
use App\Models\Taxe;
use Illuminate\Http\Request;

class TaxeController extends Controller
{
    public function tax ()
    
    { 
         $taxes = Taxe::orderBy('created_at', 'desc')->get();
        
        return view('app_admin.settings.taxes',compact('taxes'));
        
    }

    public function cta ()
    
    {

        return view('app_admin.settings.taxecreate');

    }

    public function store(Request $request)
{

    $request->validate([
        'nom' => 'required|string',
        'tr' => 'required|string',
        'taux_de_taxe' => 'required|numeric',
    ]);

    // Création d'une nouvelle taxe
    $taxe = new Taxe();
    $taxe->nom = $request->nom;
    $taxe->tr = $request->tr;
    $taxe->taux_de_taxe = $request->taux_de_taxe;
    $taxe->save();

    return redirect()->route('taxe');
}

public function destroy($id)
   
{
    $taxe = Taxe::findOrFail($id);
    $taxe->delete();

    return redirect()->route('taxe');
}

public function show($id)
{
    $taxe = Taxe::findOrFail($id);
    

    return view('app_admin.settings.updatetaxe', compact('taxe'));
}

public function update(Request $request, $id)
{
    $taxe = Taxe::findOrFail($id);
      
    $request->validate([
        'nom' => 'required|string',
        'tr' => 'required|string',
        'taux_de_taxe' => 'required|numeric',
    ]);

    $taxe->update([
        'nom' => $request->input('nom'),
        'tr' => $request->input('tr'),
        'taux_de_taxe' => $request->input('taux_de_taxe'),
    
    ]);

    return redirect()->route('taxe');
}

   
}
