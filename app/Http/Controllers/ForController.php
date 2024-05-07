<?php

namespace App\Http\Controllers;
use App\Models\Addressefor;
use App\Models\Fournisseur;
use App\Models\Informationfor;
use App\Models\Prix;
use App\Models\Devise;
use App\Models\Taxe;
use Illuminate\Http\Request;

class ForController extends Controller
{
    public function  index() {
        $fors = Fournisseur::orderBy('created_at', 'desc')->get();
        $addr = Addressefor::orderBy('created_at', 'desc')->get();
        return view('app_admin.for_app.fornniseur', compact('fors','addr'));
    }

    public function destroy($id)
   
    {
        $for = Fournisseur::findOrFail($id);
        $for->delete();
        $us= $for->numerofor;

        $addr = Addressefor::where('for_id','=', $us)->first();
        $addr->delete();

        $ifor= Informationfor::where('for_id','=',$us )->first();
        $ifor->delete();

        return redirect()->route('for');
    }

    public function show($id)
    {
        $for = Fournisseur::findOrFail($id);
         $us= $for->numerofor;

         $addr = Addressefor::where('for_id','=', $us)->first();

         $ifor= Informationfor::where('for_id','=',$us )->first();
        
        
         

         $prixs =  Prix::where('type','=', 'purchases')->get();

         $devises = Devise::orderBy('created_at', 'desc')->get();
         $taxes = Taxe::orderBy('created_at', 'desc')->get();

        return view('app_admin.for_app.updatefor', compact('for','prixs','devises', 'taxes','addr','ifor'));
    }

    public function update(Request $request, $id)
    {
   

    $for = Fournisseur::findOrFail($id);
    $us= $for->numerofor;

    $for->update([
        'nom' => $request->input('nom'),
        'numerofor' => $request->input('numerofor'),
        'email' => $request->input('email'),
        'telephone' => $request->input('telephone'),
       
    ]);

    $address = Addressefor::where('for_id', $us)->first();
    $address->update([
      
        'pays' => $request->input('pays'),
        'addr1' => $request->input('addr1'),
        'addr2' => $request->input('addr2'),
        'codepos' => $request->input('codepos'),
        'ville' => $request->input('ville'),
    ]);

    // Mettre à jour les informations détaillées du client
    $information = Informationfor::where('for_id', $us)->first();
    $information->update([
       
        'nivprix' => $request->input('nivprix'),
        'devise' => $request->input('devise'),
        'remise' => $request->input('remise'),
        'taxe' => $request->input('taxe'),
        'langues' => $request->input('langues'),
    ]);


   
    return redirect()->route('for');
}



    


}
