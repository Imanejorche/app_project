<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fournisseur;
use App\Models\Employee;
use App\Models\Addresseemp;
use App\Models\Informationemp;
class EmpcreateController extends Controller
{
    public function index(){



        $fors = Fournisseur::orderBy('created_at', 'desc')->get();
        
        return view('app_admin.emp_app.create', compact('fors'));
    }

    public function save(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'numeroemp' => 'required',
            'email' => 'required',
            'telephone' => 'required',

           
            'pays' => 'required',
            'addr1' => 'required',
            'ville' => 'required',

          
            'foremp' => 'required',
            'titre' => 'required',
           
        ]);

        // Enregistrer les données en fonction du type de formulaire
       
        $num = $request->input('numeroemp');
        
            
                $emp = new Employee ();
                $emp->nom = $request->input('nom');
                $emp->prenom = $request->input('prenom');
                $emp->numeroemp = $request->input('numeroemp');
                $emp->email = $request->input('email');
                $emp->telephone = $request->input('telephone');
               
               
               
                $emp->save();
                
               
                
           
                $addressm = new Addresseemp();
               
                $addressm->pays = $request->input('pays');
                $addressm->addr1 = $request->input('addr1');
                $addressm->addr2 = $request->input('addr2');
                $addressm->codepos = $request->input('codepos');
                $addressm->ville = $request->input('ville');
                $addressm->emp_id = $num ;

                $addressm->save();

                
                $informationm = new Informationemp();
               
                $informationm->foremp = $request->input('foremp');
                $informationm->titre= $request->input('titre');
                $informationm->emp_id = $num ;
               
                $informationm->save();

                    
    

           
                return redirect()->route('emp');   

    }
}
