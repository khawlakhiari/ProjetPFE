<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EtablissementController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\MembreJuryController;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DossierController;

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
////register et login page route
Route::get('/registeretlogin',[TemplateController::class, 'registeretlogin']);
//////home page route//////

Route::get('/',[TemplateController::class, 'Show_home_page']);
//////home page route//////



//////Register Routes//////
Route::get('/register',[EtudiantController::class,'Show_register_page']);
Route::post('/register',[EtudiantController::class,'register']);
///////Register Routes//////

/////login Routes///
Route::get('/login',[EtudiantController::class, 'Show_login_page']);
Route::post('/login',[EtudiantController::class, 'login']);
/////login Routes///

/////reset password  Routes///
Route::get('/resetpassword',[EtudiantController::class, 'Show_resetpassword_page']);
Route::post('/resetpassword',[EtudiantController::class,'reset_password'])->name('resetpassword');
/////reset password Routes///

/////new password Routes///
Route::get('/changermotdepasse',[EtudiantController::class, 'Show_new_password_page'])->name('changermotdepasse');
Route::post('/changermotdepasse',[EtudiantController::class, 'changermotdepasse'])->name('changermotdepasse');
/////end new password Routes///

/////profile Routes///
Route::get('/profile',[EtudiantController::class,'Show_profile_page'])->name('profile');
Route::get('/suivant',[EtudiantController::class,'Show_profile2_page'])->name('suivant');
Route::get('/baccalauriat/{id}',[DossierController::class,'Show_baccalauriat_page'])->name('baccalauriat');
Route::post('/baccalauriat',[DossierController::class,'insertdossier'])->name('baccalauriat');

Route::get('/diplome',[EtudiantController::class,'Show_diplome_page'])->name('diplome');
Route::post('/edit/Profile',[EtudiantController::class, 'editProfile'])->name('editProfile');
Route::post('fetch',[ EtudiantController::class,'fetch'])->name('fetch');
///// end profile Routes//////
///
///
///
///

//////login _admin/////////////////////
Route::get('/admin_login',[AdminController::class, 'Show_login_admin_page'])->name('admin_login');
Route::post('/login_admin',[AdminController::class, 'login_admin'])->name('login_admin');
Route::get('/profile_admin',[AdminController::class, 'Show_profile_admin_page']);

//////login _admin///////////////////
///
///
/// //////Membre  jury Routes//////
Route::get('/jury_login',[MembreJuryController::class, 'Show_login_jury_page'])->name('jury_login');
Route::post('/login_jury',[MembreJuryController::class, 'login_jury'])->name('login_jury');
Route::get('/MJ_page',[MembreJuryController::class, 'Show_MJ_page'])->name('MJ_page');
Route::get('/add_MJ',[MembreJuryController::class, 'Show_add_MJ_page'])->name('add_MJ');
Route::post('/add_MJ',[MembreJuryController::class, 'add_MJ'])->name('add_MJ');
//Route::get('/update_enseignant/{id_e}',[MembreJuryController::class, 'Show_update_MJ_page']);
//Route::post('update_enseignant',[MasterController::class, 'update_enseignant']);

Route::get('/delete_enseignant/{id_e}',[MembreJuryController::class, 'delete_enseignant']);

/// ////// Membre  jury Routes//////
///
///
/// //////Etablissemnet Routes//////
Route::get('/show_etablissement',[EtablissementController::class, 'Show_Etablissement_page'])->name('show_etablissement');
Route::get('/show_add_etablissement',[EtablissementController::class, 'Show_Add_etablissement_page'])->name('show_add_etablissement');
Route::post('/show_add_etablissement',[EtablissementController::class, 'add_etablissement'])->name('show_add_etablissement');
Route::get('/update_etablissement/{id_etab}',[EtablissementController::class, 'Show_update_etab_page'])->name('update_etablissement');
Route::post('/update_etablissement',[EtablissementController::class, 'update_etablissement'])->name('update_etablissement');
Route::get('/delete_etab/{id_etab}',[EtablissementController::class, 'delete_etab']);


/// //////Etablissement Routes//////
///
///
////////////////master routes///////////////////
Route::get('/master_page',[MasterController::class, 'Show_master_page'])->name('master_page');
Route::get('/add_master',[MasterController::class, 'Show_add_master_page'])->name('add_master');
Route::post('/add_master',[MasterController::class, 'add_master'])->name('add_master');
Route::get('/update_master/{id_master}',[MasterController::class, 'Show_update_master_page']);
Route::post('update_master',[MasterController::class, 'update_master']);
Route::get('/delete_master/{id_master}',[MasterController::class, 'delete_master']);
Route::get('/master_rech',[MasterController::class,'Show_master_rech_page'])->name('master_rech');
Route::get('/master_pro',[MasterController::class,'Show_master_pro_page'])->name('master_pro');

////////////////end master routes///////////////////



Route::get('/changer_mot_passe',[AdminController::class,'show_changer_mot_passe'])->name('changer_mot_passe');
Route::post('/changer_mot_passe',[AdminController::class,'trait_changer_mot_passe'])->name('changer_mot_passe');


Route::get('/mot_passe_oublier',[AdminController::class,'show_mot_passe_oublier']);
Route::post('/mot_passe_oublier',[AdminController::class,'trait_mot_passe_oublier'])->name('mot_passe_oublier');

Route::get('/changer_mot_passe_mail',[AdminController::class,'show_changer_mot_passe_mail'])->name('changer_mot_passe_mail');
Route::post('/changer_mot_passe_mail',[AdminController::class,'trait_changer_mot_passe_mail'])->name('changer_mot_passe_mail');


/////////////////////////////////////////////////   Filiere Routes   ////////////////////////////////////////////////////////////////
Route::get('/show_filiere',[FiliereController::class, 'show_filiere_page'])->name('show_filiere');
Route::get('/add_filiere',[FiliereController::class, 'show_add_filiere'])->name('add_filiere');
Route::post('/add_filiere',[FiliereController::class, 'trait_add_filiere'])->name('add_filiere');
Route::get('/update_filiere/{id_f}',[FiliereController::class, 'show_update_filiere'])->name('update_filiere');
Route::post('/update_filieres',[FiliereController::class, 'trait_update_filiere'])->name('update_filieres');
//Route::get('/delete_etab/{id_etab}',[FiliereController::class, 'delete_etab']);

////////////////////////////////////////////////   Filiere Routes   ////////////////////////////////////////////////////////////////
