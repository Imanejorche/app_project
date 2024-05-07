<?php

namespace App\Http\Controllers\prod;
use App\Models\Prix;
use App\Models\Produit;
use App\Models\Stock;
use App\Models\Prixachatvente;
use App\Models\Devise;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdcreateController extends Controller
{
    public function  index() {
       
        $prixs =  Prix::where('type','=', 'sales')->get();
        
        $devises = Devise::orderBy('created_at', 'desc')->get();

        $prix_achat =  Prix::where('type','=', 'purchases')->get();

       
        return view('app_admin.prod_app.create',compact('prixs','devises','prix_achat'));
    }
   

    public function save(Request $request) {
        // Enregistrement dans la table "produits"
        $produit = new Produit();
        $produit->podname = $request->input('podname');
        $produit->barecode = $request->input('barecode');
        $produit->type = $request->input('type');
        $produit->save();
    
        // Enregistrement dans la table "stocks"
        $stock = new Stock();
        $stock->cout = $request->input('cout');
        $stock->lieu = $request->input('lieu');
        $stock->quantite = $request->input('quantite');
        $stock->niveau = $request->input('niveau');
        $stock->save();
    
        // Enregistrement dans la table "prixachatventes"
        $prixs =  Prix::where('type','=', 'sales')->get();

          $niv =$prixs->nom;
          $type=$prixs->type;

        $prix_achat =  Prix::where('type','=', 'purchases')->get();

        $niv =$prix_achat->nom;
        $type=$prix_achat->type;

        $prixachatvente = new Prixachatvente();
        $prixachatvente->nivprix = $niv ;
        $prixachatvente->type = $type ;
        $prixachatvente->prix = $request->input('prix');
        $prixachatvente->devise = $request->input('devise');
        $prixachatvente->save();
    
        // Retourner une réponse appropriée
        return redirect()->route('prod');  
    }
    
    
}
