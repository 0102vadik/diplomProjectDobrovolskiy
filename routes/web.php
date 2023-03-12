<?php

use App\Http\Controllers\VacanciesCompanyController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', function(){
    if(Auth::user()->type_user == "Компания") {
        return redirect('/home/company');
    }
    if(Auth::user()->type_user == "Компания") {
        return redirect('/home/student');
    }
})->name('home');

Route::get('/home/company',[VacanciesCompanyController::class, 'index']);
Route::get('/home/student',[VacanciesCompanyController::class, 'index']);

Route::get('/register/student', function (){
   return view('forms.student');
})->name('register-student');

Route::get('/register/company', function (){
    return view('forms.company');
})->name('register-company');

Route::get('/create-application', function (){
    return view('pages.create-application');
})->name('create-application');


