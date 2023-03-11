<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register/student', function (){
   return view('forms.student');
})->name('register-student');

Route::get('/register/company', function (){
    return view('forms.company');
})->name('register-company');

Route::get('/create-application', function (){
    return view('pages.create-application');
})->name('create-application');


