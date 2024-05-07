<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Prix;
use App\Models\Devise;
use App\Models\Taxe;
use App\Models\Addresse;
use App\Models\Iformationcl;
use Illuminate\Support\Facades\Validator;
class CreateclController extends Controller

{

    public function index(){

        $prixs =  Prix::where('type','=', 'sales')->get();
        $devises = Devise::orderBy('created_at', 'desc')->get();
        $taxes = Taxe::orderBy('created_at', 'desc')->get();
       
        return view('app_admin.client_app.create', compact('prixs','devises', 'taxes'));
    }

    
    public function save(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'numeroclient' => 'required',
            'email' => 'required',
            'telephone' => 'required',

            'libaddr' => 'required',
            'typeaddr' => 'required',
            'pays' => 'required',
            'addr1' => 'required',
            'ville' => 'required',

            'lieustock' => 'required',
            'nivprix' => 'required',
            'devise' => 'required',
            'typetaxe' => 'required',
            'jours' => 'required',
            'delais' => 'required',
            'langues' => 'required',
        ]);

        // Enregistrer les données en fonction du type de formulaire
        $num = $request->input('numeroclient');
               
        
            
                $client = new Client();
                $client->nom = $request->input('nom');
                $client->numeroclient = $request->input('numeroclient');
                $client->email = $request->input('email');
                $client->telephone = $request->input('telephone');
                $client->statut = $request->input('statut');
                $client->ntaxe = $request->input('ntaxe');
            
               
                $client->save();
                
               
                
           
                $address = new Addresse();
                $address->libaddr = $request->input('libaddr');
                $address->typeaddr = $request->input('typeaddr');
                $address->telephone = $request->input('telephone');
                $address->pays = $request->input('pays');
                $address->addr1 = $request->input('addr1');
                $address->addr2 = $request->input('addr2');
                $address->codepos = $request->input('codepos');
                $address->ville = $request->input('ville');
                $address->client_id = $num ;

                $address->save();

                
                $information = new Iformationcl();
                $information->lieustock = $request->input('lieustock');
                $information->nivprix = $request->input('nivprix');
                $information->devise = $request->input('devise');
                $information->remise = $request->input('remise');
                $information->montantcom = $request->input('montantcom');
                $information->typetaxe = $request->input('typetaxe');
                $information->jours = $request->input('jours');
                $information->delais = $request->input('delais');
                $information->langues = $request->input('langues');
                $information->taxe = $request->input('taxe');
                $information->client_id = $num ;
                $information->save();

                    
    

           
                return redirect()->route('client');   

    }
}




