<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*-------------FRONTEND------------*/

Route::get('/',[HomeController::class, 'index']
)->name('offres');

Route::get('/detail-offre',[HomeController::class, 'showDetailOffre']
)->name('details-offres');

Route::get('/nos-metiers',[HomeController::class, 'showPageNosMetiers']
)->name('nos-metiers');

Route::get('/nous-rejoindre',[HomeController::class, 'showPageNousRejoindre']
)->name('nous-rejoindre');

Route::get('/connexion',[LoginController::class, 'index']
)->name('connexion');

Route::get('/candidats/inscription',[InscriptionController::class, 'index']
)->name('inscription');

Route::get('/candidats/dashboard',[CandidatController::class, 'index']
)->name('dashboard');

Route::get('/admin/dashboard',[AdminController::class, 'index']
)->name('admin.dashboard');
