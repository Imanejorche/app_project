<?php

namespace App\Http\Controllers;
use App\Models\Prix;
use App\Models\Devise;
use App\Models\Taxe;
use App\Models\Fournisseur;
use App\Models\Addressefor;
use App\Models\Informationfor;


use Illuminate\Http\Request;

class ForcreateController extends Controller
{
    public function index(){

        $prixs =  Prix::where('type','=', 'purchases')->get();

        $devises = Devise::orderBy('created_at', 'desc')->get();
        $taxes = Taxe::orderBy('created_at', 'desc')->get();
       
        return view('app_admin.for_app.createfor', compact('prixs','devises', 'taxes'));
    }

    
    public function save(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'numerofor' => 'required',
            'email' => 'required',
            'telephone' => 'required',

           
            'pays' => 'required',
            'addr1' => 'required',
            'ville' => 'required',

          
            'nivprix' => 'required',
            'devise' => 'required',
            'taxe' => 'required',
            'langues' => 'required',
        ]);

        // Enregistrer les données en fonction du type de formulaire
       
        $num = $request->input('numerofor');
        
            
                $for = new Fournisseur();
                $for->nom = $request->input('nom');
                $for->numerofor = $request->input('numerofor');
                $for->email = $request->input('email');
                $for->telephone = $request->input('telephone');
               
               
               
                $for->save();
                
               
                
           
                $addressf = new Addressefor();
               
                $addressf->pays = $request->input('pays');
                $addressf->addr1 = $request->input('addr1');
                $addressf->addr2 = $request->input('addr2');
                $addressf->codepos = $request->input('codepos');
                $addressf->ville = $request->input('ville');
                $addressf->for_id = $num ;

                $addressf->save();

                
                $informationf = new Informationfor();
               
                $informationf->nivprix = $request->input('nivprix');
                $informationf->devise = $request->input('devise');
                $informationf->remise = $request->input('remise');
                $informationf->taxe = $request->input('taxe');
                $informationf->langues = $request->input('langues');
                $informationf->for_id = $num ;
                $informationf->save();

                    
    

           
                return redirect()->route('for');   

    }
}
