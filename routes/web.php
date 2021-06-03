<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\isAdmin;
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


#====================INSCRIPTIONS CANDIDATS============================#
Route::post('/inscriptions/store', [InscriptionController::class, 'store']
)->name('inscription.store');

Route::get('/candidats/inscription',[InscriptionController::class, 'index']
)->name('inscription');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


#======================ESPACE CANDIDAT=====================
Route::middleware([isConnected::class])->group(function(){
    Route::get('/candidats/dashboard',[CandidatController::class, 'index'])->name('candidats.dashboard');
});

#-===========================ESPACE ADMIN=====================
Route::middleware([isAdmin::class])->group(function () {
    Route::get('/admin/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/logout',[AdminController::class, 'logout'])->name('admin.logout');

    Route::get('/admin/users',[UsersController::class, 'index'])->name('users.list');
    Route::get('/admin/users/edit',[UsersController::class, 'edit'])->name('users.edit');
    Route::get('/admin/users/view',[UsersController::class, 'view'])->name('users.view');
    Route::get('/admin/users/add',[UsersController::class, 'add'])->name('users.add');


});
Route::get('/admin/auth',[AdminController::class, 'login'])->name('admin.auth');
Route::post('/admin/post-login',[AdminController::class,'postLogin'])->name('post.login');


#=================AUTHENTIFICATION INSCRITS(CANDIDATS)============

Route::post('candidats/login',[LoginController::class,'login'])->name('check.login');

Route::get('candidats/logout',[LoginController::class,'logout'])->name('logout');

Auth::routes();
