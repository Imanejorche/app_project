<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CreateclController;
use App\Http\Controllers\DeviseController;
use App\Http\Controllers\CreatedevisController;
use App\Http\Controllers\PrixController;
use App\Http\Controllers\TaxeController;
use App\Http\Controllers\CreateprixController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\ForController;
use App\Http\Controllers\ForcreateController;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\EmpcreateController;
use App\Http\Controllers\prod\ProdController;
use App\Http\Controllers\prod\ProdcreateController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function(){
    Route::get('register','register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login','login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout','logout')->middleware('auth' )->name('logout');
    
});

 Route::middleware('auth.redirect')->group(function () {
    Route::get('admin/dashboard', [DashController::class, 'index'])->name('admin/dashboard');
});


 Route::get('/admin/dashboard/client',[ClientController::class, 'index'])->name('client');

 Route::get('/admin/dashboard/client/create',[CreateclController::class, 'index'])->name('clientCR');
 Route::post('/admin/dashboard/client/create', [CreateclController::class, 'save'])->name('formdata');


 Route::get('/admin/dashboard/fournisseur',[ForController::class, 'index'])->name('for');

 Route::get('/admin/dashboard/fournisseur/create',[ForcreateController::class, 'index'])->name('forCR');
 Route::post('/admin/dashboard/fournisseur/create', [ForcreateController::class, 'save'])->name('formsave');


 Route::get('/admin/dashboard/employee',[EmpController::class, 'index'])->name('emp');

 Route::get('/admin/dashboard/employee/create',[EmpcreateController::class, 'index'])->name('empCR');
 Route::post('/admin/dashboard/employee/create', [EmpcreateController::class, 'save'])->name('formsav');




 Route::get('/admin/dashboard/settings/devises',[DeviseController::class, 'index'])->name('devises');

 Route::get('/admin/dashboard/settings/devises/create',[CreateDevisController::class, 'index'])->name('createdevise');
 Route::post('/admin/dashboard/settings/devises/create', [CreateDevisController::class, 'store'])->name('savedevise');

 Route::get('/admin/dashboard/settings/prix',[PrixController::class, 'index'])->name('prix');

 Route::get('/admin/dashboard/settings/prix/create',[CreateprixController::class, 'inde'])->name('createprix');
 Route::post('/admin/dashboard/settings/prix/create', [CreateprixController::class, 'store'])->name('saveprix');

 Route::get('/admin/dashboard/settings/taxe',[TaxeController::class, 'tax'])->name('taxe');
 Route::get('/admin/dashboard/settings/taxe/crea',[TaxeController::class, 'cta'])->name('crtaxe');
 Route::post('/admin/dashboard/settings/taxe/crea',[TaxeController::class, 'store'])->name('savetaxe');


 Route::get('/admin/dashboard/client/update/{id}', [ClientController::class, 'show'])->name('sshow');
 Route::delete('/admin/dashboard/client/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');
 Route::put('/admin/dashboard/client/{id}', [ClientController::class, 'update'])->name('clients.update');

 Route::get('/admin/dashboard/settings/devise/update/{id}', [DeviseController::class, 'show'])->name('showdevise');
 Route::delete('/admin/dashboard/settings/devise/{id}', [DeviseController::class, 'destroy'])->name('devise.destroy');
 Route::put('/admin/dashboard/settings/devise/{id}', [DeviseController::class, 'update'])->name('devise.update');

 Route::get('/admin/dashboard/settings/price/update/{id}', [PrixController::class, 'show'])->name('showprix');
 Route::delete('/admin/dashboard/settings/price/{id}', [PrixController::class, 'destroy'])->name('prix.destroy');
 Route::put('/admin/dashboard/settings/price/{id}', [PrixController::class, 'update'])->name('prix.update');

 Route::get('/admin/dashboard/settings/taxe/update/{id}', [TaxeController::class, 'show'])->name('showtaxe');
 Route::delete('/admin/dashboard/settings/taxe/{id}', [TaxeController::class, 'destroy'])->name('taxe.destroy');
 Route::put('/admin/dashboard/settings/taxe/{id}', [TaxeController::class, 'update'])->name('taxe.update');
 
 
 Route::get('/admin/dashboard/provider/update/{id}', [ForController::class, 'show'])->name('showfor');
 Route::delete('/admin/dashboard/provider/delete/{id}', [ForController::class, 'destroy'])->name('for.destroy');
 Route::put('/admin/dashboard/provider/{id}', [ForController::class, 'update'])->name('for.update');

 Route::get('/admin/dashboard/employee/update/{id}', [EmpController::class, 'show'])->name('showemp');
 Route::delete('/admin/dashboard/employee/delete/{id}', [EmpController::class, 'destroy'])->name('emp.destroy');
 Route::put('/admin/dashboard/employee/{id}', [EmpController::class, 'update'])->name('emp.update');

 Route::get('/admin/dashboard/product',[ProdController::class, 'index'])->name('prod');

 Route::get('/admin/dashboard/product/create',[ProdcreateController::class, 'index'])->name('prodCR');


 Route::post('/admin/dashboard/Produit/create', [ProdcreateclController::class, 'save'])->name('prodsave');
