<?php

use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\OffresController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\isAdmin;
use App\Models\CategorieOffre;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
#=====================FRONTEND==============================

Route::get('/',[HomeController::class, 'index']
)->name('offres');

Route::get('/detail-offre',[HomeController::class, 'showDetailOffre']
)->name('details-offres');

Route::get('/nos-metiers',[HomeController::class, 'showPageNosMetiers']
)->name('nos-metiers');

Route::get('/candidature-spontanee',[HomeController::class, 'showPageCandidatureSpontanee']
)->name('candidature-spontanee');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

#-===========================ESPACE ADMIN=====================
Route::group(["as"=>"admin.","prefix"=>"admin"],function () {

    Route::group(["middleware"=>"isAdmin"],function () {
        #===========================DASHBOARD======================
        Route::get('/dashboard',[AdminController::class, 'dashboard'])->name('dashboard');
        #===========================USERS==========================
        Route::get('/users',[UsersController::class, 'index'])->name('users.list');
        Route::get('/users/edit',[UsersController::class, 'edit'])->name('users.edit');
        Route::get('/users/view',[UsersController::class, 'view'])->name('users.view');
        Route::get('/users/add',[UsersController::class, 'add'])->name('users.add');
        #===========================OFFRES==========================
        Route::get('/offres',[OffresController::class, 'index'])->name('offres.list');
        Route::get('/offres/lancees',[OffresController::class, 'lancees'])->name('offres.lancees');
        Route::get('/offres/edit',[OffresController::class, 'edit'])->name('offres.edit');
        Route::get('/offres/view',[OffresController::class, 'view'])->name('offres.view');
        Route::get('/offres/add',[OffresController::class, 'add'])->name('offres.add');
        #===========================CANDIDATURES==========================
        Route::get('/candidatures',[UsersController::class, 'list'])->name('candidatures.list');
        Route::get('/candidatures/view',[UsersController::class, 'view'])->name('candidatures.view');
        Route::get('/offres/categories/add',[CategorieController::class,'index'])->name('categorie.create');
        Route::post('/offres/categories/add',[CategorieController::class,'store'])->name('categorie.store');

    });
    #=========================AUTH=================================
    // Route::get('auth',[AdminController::class, 'login'])->name('auth');
    Route::post('/post-login',[AdminController::class,'postLogin'])->name('login');

});

#=================MODULE CANDIDATS============
// Route::group(["prefix"=>"candidats","as"=>"candidats."],function () {
//     Route::get('/dashboard',[CandidatController::class, 'index'])->name('dashboard');
//     Route::post('/store', [InscriptionController::class, 'store'])->name('store');
//     Route::get('/',[InscriptionController::class, 'index'])->name('index');
// })->middleware(["isAdmin"]);

Route::middleware(['auth'])->group(function () {
    Route::get('/candidats/dashboard',[CandidatController::class, 'index'])->name('candidats.dashboard');
    // Route::post('/candidats/store', [InscriptionController::class, 'store'])->name('candidats.store');
    // Route::get('/candidats',[InscriptionController::class, 'index'])->name('candidats.index');
});
Auth::routes();
