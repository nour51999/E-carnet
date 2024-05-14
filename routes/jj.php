<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EnsController;
use App\Http\Controllers\DevoirController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
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
    return view('/home');
});




//Route::view('login','login');



Route::get('/note',[UserController::class, 'index']);





Route::get('/profile', function () {
    return view('profil');
});
Route::get('/profil2', function () {
    return view('profil2');
});

Route::resource('students',StudentController::class);
Route::resource('ens',EnsController::class);
Route::resource('devoirs',DevoirController::class);


Route::get('/liste', function () {
    return view('liste');
});


Route::get('/students.show/{id}',[StudentController::class,'show'])->name('students.shows');
Route::get('/supprimer-students/{id}',[StudentController::class,'destroy'])->name('delete-students');
Route::get('/supprimer-ens/{id}',[EnsController::class,'destroy'])->name('delete-ens');

Route::get('/editer-students/{id}',[StudentController::class,'edit'])->name('edit-students');
Route::post('/modifier/students/{id}',[StudentController::class,'update'])->name('update.students');
   




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])
->name('admin.home')->middleware('is_admin');

