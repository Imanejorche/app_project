<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Fournisseur;
use App\Models\Addresseemp;
use App\Models\Informationemp;
use Illuminate\Http\Request;

class EmpController extends Controller
{
    public function  index() {

        $emps = Employee::orderBy('created_at', 'desc')->get();
       
        return view('app_admin.emp_app.employee', compact('emps'));
    }

    public function destroy($id)
   
    {
        $emp = Employee::findOrFail($id);
        $emp->delete();
        $us= $emp->numeroemp;

        $addr = Addresseemp::where('emp_id','=', $us)->first();
        $addr->delete();

        $ifor= Informationemp::where('emp_id','=',$us )->first();
        $ifor->delete();

        return redirect()->route('emp');
    }

    public function show($id)
    {
        $emp = Employee::findOrFail($id);
         $us= $emp->numeroemp;

         $addr = Addresseemp::where('emp_id','=', $us)->first();

         $ifor= Informationemp::where('emp_id','=',$us )->first();
         
         $fors = Fournisseur::orderBy('created_at', 'desc')->get();

        return view('app_admin.emp_app.update', compact('emp','addr','ifor','fors'));
    }

    public function update(Request $request, $id)
    {
   

    $emp = Employee::findOrFail($id);
    $us= $emp->numeroemp;

    $emp->update([
        'nom' => $request->input('nom'),
        'prenom'=> $request->input('prenom') ,
        'numeroemp' => $request->input('numeroemp'),
        'email' => $request->input('email'),
        'telephone' => $request->input('telephone'),
       
    ]);

    $address = Addresseemp::where('emp_id', $us)->first();
    $address->update([
      
        'pays' => $request->input('pays'),
        'addr1' => $request->input('addr1'),
        'addr2' => $request->input('addr2'),
        'codepos' => $request->input('codepos'),
        'ville' => $request->input('ville'),
    ]);

    // Mettre à jour les informations détaillées du client
    $information = Informationemp::where('emp_id', $us)->first();
    $information->update([
       
        'foremp' => $request->input('foremp'),
        'titre' => $request->input('titre'),
       
    
    ]);


   
    return redirect()->route('emp');
}
}