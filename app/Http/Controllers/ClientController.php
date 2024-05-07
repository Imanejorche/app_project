<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Prix;
use App\Models\Devise;
use App\Models\Taxe;
use App\Models\Addresse;
use App\Models\Iformationcl;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function  index() {
        $clients = Client::orderBy('created_at', 'desc')->get();
        return view('app_admin.client_app.client', compact('clients'));
    }

    public function destroy($id)
   
    {
        $client = Client::findOrFail($id);
        $client->delete();
        $us= $client->numeroclient;

        $addr = Addresse::where('client_id','=', $us)->first();
        $addr->delete();

        $ifor= Iformationcl::where('client_id','=',$us )->first();
        $ifor->delete();
        return redirect()->route('client');
    }

    public function show($id)
    {
         $client = Client::findOrFail($id);
         $us= $client->numeroclient;

         $addr = Addresse::where('client_id','=', $us)->first();

         $ifor= Iformationcl::where('client_id','=',$us )->first();
        
         $prixs = Prix::orderBy('created_at', 'desc')->get();
         $devises = Devise::orderBy('created_at', 'desc')->get();
         $taxes = Taxe::orderBy('created_at', 'desc')->get();

        return view('app_admin.client_app.update', compact('client','prixs','devises', 'taxes','addr','ifor'));
    }

    public function update(Request $request, $id)
    {
   

    $client = Client::findOrFail($id);
    $us= $client->numeroclient;

    $client->update([
        'nom' => $request->input('nom'),
        'numeroclient' => $request->input('numeroclient'),
        'email' => $request->input('email'),
        'telephone' => $request->input('telephone'),
        'statut' => $request->input('statut'),
        'ntaxe' => $request->input('ntaxe'),
    ]);

    $address = Addresse::where('client_id', $us)->first();
    $address->update([
        'libaddr' => $request->input('libaddr'),
        'typeaddr' => $request->input('typeaddr'),
        'telephone' => $request->input('telephone'),
        'pays' => $request->input('pays'),
        'addr1' => $request->input('addr1'),
        'addr2' => $request->input('addr2'),
        'codepos' => $request->input('codepos'),
        'ville' => $request->input('ville'),
    ]);

    // Mettre à jour les informations détaillées du client
    $information = Iformationcl::where('client_id', $us)->first();
    $information->update([
        'lieustock' => $request->input('lieustock'),
        'nivprix' => $request->input('nivprix'),
        'devise' => $request->input('devise'),
        'remise' => $request->input('remise'),
        'montantcom' => $request->input('montantcom'),
        'typetaxe' => $request->input('typetaxe'),
        'jours' => $request->input('jours'),
        'delais' => $request->input('delais'),
        'langues' => $request->input('langues'),
    ]);


   
    return redirect()->route('client');
}



}
