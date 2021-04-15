<?php

use App\Http\Controllers\EtudiantController;
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
Route::get('/admin_login',[\App\Http\Controllers\AdminController::class, 'Show_login_admin_page'])->name('admin_login');
Route::post('/login_admin',[\App\Http\Controllers\AdminController::class, 'login_admin'])->name('login_admin');
Route::get('/profile_admin',[\App\Http\Controllers\AdminController::class, 'Show_profile_admin_page']);

//////login _admin///////////////////
///
///
/// //////Membre  jury Routes//////
Route::get('/jury_login',[\App\Http\Controllers\MembreJuryController::class, 'Show_login_jury_page'])->name('jury_login');
Route::post('/login_jury',[\App\Http\Controllers\MembreJuryController::class, 'login_jury'])->name('login_jury');
Route::get('/MJ_page',[\App\Http\Controllers\MembreJuryController::class, 'Show_MJ_page'])->name('MJ_page');
Route::get('/add_MJ',[\App\Http\Controllers\MembreJuryController::class, 'Show_add_MJ_page'])->name('add_MJ');
Route::post('/add_MJ',[\App\Http\Controllers\MembreJuryController::class, 'add_MJ'])->name('add_MJ');
Route::get('/update_enseignant/{id_e}',[\App\Http\Controllers\MembreJuryController::class, 'Show_update_MJ_page']);
Route::post('update_enseignant',[\App\Http\Controllers\MasterController::class, 'update_enseignant']);
/// ////// Membre  jury Routes//////


////////////////master routes///////////////////
Route::get('/master_page',[\App\Http\Controllers\MasterController::class, 'Show_master_page'])->name('master_page');
Route::get('/add_master',[\App\Http\Controllers\MasterController::class, 'Show_add_master_page'])->name('add_master');
Route::post('/add_master',[\App\Http\Controllers\MasterController::class, 'add_master'])->name('add_master');
Route::get('/update_master/{id_master}',[\App\Http\Controllers\MasterController::class, 'Show_update_master_page']);
Route::post('update_master',[\App\Http\Controllers\MasterController::class, 'update_master']);
Route::get('/delete_master/{id_master}',[\App\Http\Controllers\MasterController::class, 'delete_master']);
////////////////end master routes///////////////////



