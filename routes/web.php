<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EnsController;
use App\Http\Controllers\DevoirController;
use App\Http\Controllers\ConseilController;
use App\Http\Controllers\ConvocationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SearchabsController;
use App\Http\Controllers\SearchnoteController;
use App\Http\Controllers\SearchensController;
use App\Http\Controllers\SearchparentController;
use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\ListeUserController;
use App\Http\Controllers\EmploisController;
use App\Http\Controllers\SearchuserController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\RepabsController;
use App\Http\Controllers\RepconvController;
use App\Http\Controllers\RepdevoirController;
use App\Http\Controllers\RepconseilController;
use App\Http\Controllers\RepnoteController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\SearchindexnoteController;
use App\Http\Controllers\SearchindexpController;
use App\Http\Controllers\Searchindex5Controller;
use App\Http\Controllers\Searchindex3Controller;
use App\Http\Controllers\SearchemploisensController;
use App\Http\Controllers\SearchemploisController;
use App\Http\Controllers\makupController;
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





Route::get('/', function () {
    return view('auth.login');
});

Route::get('/aj', function () {
    return view('auth.register');
});




//Route::view('login','login');



Route::get('/note',[UserController::class, 'index']);





Route::get('/profile', function () {
    return view('enseignant');
});
Route::get('/profil2', function () {
    return view('espaceParent');
});





Route::resource('users',ListeUserController::class);
Route::resource('students',StudentController::class);
Route::resource('ens',EnsController::class);
Route::resource('premiers',PremierController::class);
Route::resource('devoirs',DevoirController::class);
Route::resource('conseils',ConseilController::class);
Route::resource('convocations',ConvocationController::class);
Route::resource('absences',AbsenceController::class);
Route::resource('notes',NoteController::class);
Route::resource('emplois',EmploisController::class);
Route::resource('classes',ClasseController::class);

Route::get('/emplois/show',[EmploisController::class,'show']);

Route::get('/emploisparent',[EmploisController::class,'index2']);

Route::resource('parens',ParentController::class);
Route::resource('repconvs',RepconvController::class);
Route::resource('repabs',RepabsController::class);
Route::get('/liste', function () {
    return view('espaceAdmin');
});

Route::post('/store','App\Http\Controllers\AbsenceController@store');
Route::get('/recdevoir',[RepdevoirController::class,'search'])->name('repdevoir.search'); 

Route::get('/students.shows/{id}',[StudentController::class,'show'])->name('students.show');
Route::get('/supprimer-students/{id}',[StudentController::class,'destroy'])->name('delete-students');


Route::get('/supprimer-ens/{id}',[EnsController::class,'destroy'])->name('delete-ens');
Route::get('/supprimer-parens/{id}',[ParentController::class,'destroy'])->name('delete-parens');
Route::get('/usersEn.shows/{id}',[EnsController::class,'show'])->name(' $usersEn.show');




Route::get('/edite-ens/{id}',[EnsController::class,'edit'])->name('edit-ens');
Route::post('/modifier/ens/{id}',[EnsController::class,'update'])->name('update.ens');

Route::get('/edite-convocations/{id}',[ConvocationController::class,'edit'])->name('edit-convocations');
Route::post('/modifier/convocations/{id}',[ConvocationController::class,'update'])->name('update.convocations');

Route::get('/editer-students/{id}',[StudentController::class,'edit'])->name('edit-students');
Route::post('/modifier/students/{id}',[StudentController::class,'update'])->name('update.students');

Route::get('/editerParent-parens/{id}',[ParentController::class,'edit'])->name('edit-parens');
Route::post('/modifier/parens/{id}',[ParentController::class,'update'])->name('update.parens');
Route::get('/editernote-notes/{id}',[NoteController::class,'edit'])->name('edit-notes');
Route::post('/modifier/notes/{id}',[NoteController::class,'update'])->name('update.notes');


 Route::get('/index',[SearchController::class,'search'])->name('web.search'); 
 Route::get('/indexparent',[SearchparentController::class,'search'])->name('parent.search'); 
 Route::get('/ListeUser',[SearchuserController::class,'search'])->name('user.search'); 

 Route::get('/index2',[SearchensController::class,'search'])->name('enseignant.search'); 
 Route::get('/indexnote',[SearchindexnoteController::class,'search'])->name('indexnote.search'); 
 Route::get('/index6',[SearchemploisController::class,'search'])->name('index6.search'); 
 Route::get('/indexp',[SearchindexpController::class,'search'])->name('indexabs.search'); 


 Route::get('/index3',[Searchindex3Controller::class,'search'])->name('index3.search'); 
 Route::get('/index5',[Searchindex5Controller::class,'search'])->name('index5.search'); 


 Route::get('/absence',[SearchabsController::class,'search'])->name('abs.search'); 
 Route::get('/note',[SearchnoteController::class,'search'])->name('note.search'); 
 Route::get('/recabs',[RepabsController::class,'search'])->name('repabs.search');
 Route::get('/repconv',[RepconvController::class,'search'])->name('repconvs.search');   
 Route::get('/recnote',[RepnoteController::class,'search'])->name('repnote.search');  
 Route::get('/recconseil',[RepconseilController::class,'search'])->name('repconseil.search'); 
 Route::get('/emploisens',[SearchemploisensController::class,'search'])->name('emploisens.search'); 


Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])
->name('admin.home')->middleware('is_admin');


Route::group(['middleware'=>['auth']],function(){
    Route::get('/home','App\Http\Controllers\ProfilController@index')->name('home');
});
require __DIR__.'/auth.php';



