<?php

use App\Http\Middleware\isAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\PostulateController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\MetierController;
use App\Http\Controllers\Admin\OffresController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Admin\DomaineController;
use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\RendezVousController;

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

Route::get('/nos-metiers',[HomeController::class, 'showPageNosMetiers']
)->name('nos-metiers');

Route::get('/candidats/clients',[CandidatController::class, 'clients'])->name('register.client');
Route::post('/candidats/clients',[CandidatController::class, 'saveCandidateClient'])->name('candidats.client.save');
Route::get('/candidatures/forget-password',[CandidatController::class, 'showPasswordForm'])->name('candidatures.forget-password');
Route::post('/candidats/password',[CandidatController::class, 'sendPasswordLink'])->name('candidatures.send-password-link');
Route::get('/candidats/password/reset-link/{token}',[CandidatController::class, 'resetPasswordForm'])->name('candidatures.password-reset-form');
Route::post('/candidats/password/reset-link/{token}',[CandidatController::class, 'updatePassword'])->name('candidatures.password.update');

//SOCIALITE ROUTE
Route::get("login-register", [SocialiteController::class,'loginRegister'])->name('social.login');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// La redirection vers le provider
Route::get("redirect/{provider}", [SocialiteController::class,'redirect'])->name('social.redirect');
// Le callback du provider
Route::get("callback/{provider}", [SocialiteController::class,'callback'])->name('social.callback');
#-===========================ESPACE ADMIN=====================
Route::group(["as"=>"admin.","prefix"=>"admin"],function () {

    Route::group(["middleware"=>"isAdmin"],function () {
        #===========================DASHBOARD======================
        Route::get('/dashboard',[AdminController::class, 'dashboard'])->name('dashboard');

        Route::middleware('can:manage-users')->group(function () {
            #===========================USERS==========================
            Route::get('/users',[UsersController::class, 'usersList'])->name('users.list');
            Route::get('/users/{user}/edit',[UsersController::class, 'edit'])->name('users.edit');
            Route::post('/users/{user}/update',[UsersController::class, 'update'])->name('users.update.info');
            Route::get('/users/{user}/passsword',[UsersController::class, 'editPassword'])->name('users.edit.password');
            Route::post('/users/{user}/password',[UsersController::class, 'updateUserListPassword'])->name('users.update.password');
            Route::get('/users/view/{user}',[UsersController::class, 'view'])->name('users.view');
            Route::get('/users/add',[UsersController::class, 'add'])->name('users.add');
            Route::post('/users/store',[UsersController::class, 'store'])->name('users.store');
            Route::get('/users/{user}/delete',[UsersController::class, 'deleteUser'])->name('users.delete');
            Route::get('/users/roles',[CategorieController::class,'createRole'])->name('roles.create');
            Route::get('/users/roles/{id}/edit',[CategorieController::class,'editRole'])->name('roles.edit');
            Route::post('/users/roles/{id}/update',[CategorieController::class,'updateRole'])->name('roles.update');
            Route::get('/users/roles/{id}/delete',[CategorieController::class,'deleteRole'])->name('roles.delete');
            Route::post('/users/roles/add',[CategorieController::class,'storeRole'])->name('roles.store');

        });
        Route::get('/users/parametres/password',[UsersController::class,'createPassword'])->name('users.password');
        Route::get('/users/parametres/profil',[UsersController::class,'createProfil'])->name('users.profil');
        Route::post('/users/parametres/{user}/profil',[UsersController::class,'updateProfil'])->name('users.profil.update');
        Route::post('/users/parametres/{user}/password',[UsersController::class,'updatePassword'])->name('users.password.update');

        #===========================OFFRES==========================
        Route::middleware('can:manage-offers')->group(function () {
            Route::get('/offres',[OffresController::class, 'index'])->name('offres.list');
            Route::get('/offres/lancees',[OffresController::class, 'lancees'])->name('offres.lancees');
            Route::get('/offres/{id}/edit',[OffresController::class, 'edit'])->name('offres.edit');
            Route::get('/offres/{slug}/view',[OffresController::class, 'view'])->name('offres.view');
            Route::get('/offres/{slug}/delete',[OffresController::class, 'destroy'])->name('offres.delete');
            Route::post('/offres/{slug}/update',[OffresController::class, 'update'])->name('offres.update');
            Route::get('/offres/add',[OffresController::class, 'add'])->name('offres.add');
            Route::post('/offres/add',[OffresController::class, 'store'])->name('offres.store');
            Route::get('/offres/categories/add',[CategorieController::class,'index'])->name('categorie.create');
            Route::get('/offres/categories/{id}/edit',[CategorieController::class,'edit'])->name('categorie.edit');
            Route::post('/offres/categories/{id}/update',[CategorieController::class,'update'])->name('categorie.update');
            Route::get('/offres/categories/{id}/delete',[CategorieController::class,'destroy'])->name('categorie.delete');
            Route::post('/offres/categories/add',[CategorieController::class,'store'])->name('categorie.store');
        });

        #===========================CANDIDATURES==========================
        Route::middleware('can:manage-candidatures')->group(function () {
            Route::get('/candidatures',[UsersController::class, 'index'])->name('candidatures.list');
            Route::get('/candidatures/view',[UsersController::class, 'view'])->name('candidatures.view');
            Route::get('/candidatures/{candidat}/delete',[UsersController::class, 'delete'])->name('candidatures.delete');
        });

        Route::middleware('can:manage-domaines')->group(function () {
            Route::get('/domaines',[DomaineController::class,'index'])->name('domaine.create');
            Route::get('/domaines/{domaine}/edit',[DomaineController::class,'edit'])->name('domaine.edit');
            Route::get('/domaines/{domaine}/delete',[DomaineController::class,'destroy'])->name('domaine.delete');
            Route::post('/domaines/{domaine}/update',[DomaineController::class,'update'])->name('domaine.update');
            Route::post('/domaines/categories/add',[DomaineController::class,'storeDomaine'])->name('domaine.store');
        });

        Route::middleware('can:manage-metiers')->group(function () {
            Route::get('/metiers',[MetierController::class,'index'])->name('metier.create');
            Route::get('/metiers/{metier}/edit',[MetierController::class,'edit'])->name('metier.edit');
            Route::post('/metiers/{metier}/update',[MetierController::class,'update'])->name('metier.update');
            Route::get('/metiers/{metier}/delete',[MetierController::class,'destroy'])->name('metier.delete');
            Route::post('/metier/add',[MetierController::class,'storeMetier'])->name('metier.store');
        });
        
        Route::middleware('can:manage-messages')->group(function () {
            Route::get('/rendez-vous',[RendezVousController::class,'index'])->name('rendezvous.index');
            Route::get('/rendez-vous/{id}/edit',[RendezVousController::class,'edit'])->name('rendezvous.edit');
            Route::get('/rendez-vous/{id}/show',[RendezVousController::class,'show'])->name('rendezvous.show');
            Route::post('/rendez-vous/{id}/update',[RendezVousController::class,'update'])->name('rendezvous.update');
            Route::get('/rendez-vous/{id}/delete',[RendezVousController::class,'destroy'])->name('rendezvous.delete');
            Route::post('/rendez-vous/store',[RendezVousController::class, 'store'])->name('rendezvous.store');
            Route::get('/rendez-vous/{candidat}/create',[RendezVousController::class, 'create'])->name('rendezvous.create');
            Route::post('/candidature/verify',[RendezVousController::class, 'verifyCandidatesExists'])->name('candidatures.verify');
        });
        
        
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
    Route::get('/candidats/messages',[NotificationController::class,'index'])->name('candidats.notifications');
    Route::post('/candidats/read',[NotificationController::class,'read'])->name('candidats.notifications.read');
    Route::get('/offre/{slug}/detail',[HomeController::class, 'showDetailOffre'])->name('details-offres');
    Route::get('/candidats/dashboard',[CandidatController::class, 'index'])->name('candidats.dashboard');
    Route::post('/candidats/{slug}/postulate', [PostulateController::class, 'store'])->name('candidats.postulate.store');
    Route::get('/candidats/{slug}/postulate',[PostulateController::class, 'index'])->name('candidats.postulate.index');
    Route::get('/candidats/{user}/parametres',[CandidatController::class, 'parameters'])->name('candidats.parametres');
    Route::post('/candidats/{user}/parametres',[CandidatController::class, 'changeParameters'])->name('candidats.parametres.change');
    Route::get('/candidats/rdv',[CandidatController::class, 'rendezVous'])->name('candidats.rdv');
    Route::get('/candidats/candidatures',[CandidatController::class, 'candidatures'])->name('candidats.candidatures');
    Route::get('/candidats/offres-lancees',[CandidatController::class, 'offers'])->name('candidats.offres');
    Route::get('/candidature-spontanee',[HomeController::class, 'showPageCandidatureSpontanee'])->name('candidature-spontanee');
    Route::get('/candidatures/{slug}',[CandidatController::class, 'detailOffre'])->name('candidatures.detail.offre');

});
Auth::routes();

