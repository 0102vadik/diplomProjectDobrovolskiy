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
    if(Auth::user()->type_user == "Студент") {
        return redirect('/home/student');
    }
})->middleware('auth')->name('home');

Route::get('/home/company',[VacanciesCompanyController::class, 'index'])->middleware('auth');
Route::get('/home/student',[VacanciesCompanyController::class, 'index'])->middleware('auth');

Route::get('/register/student', function (){
   return view('forms.student');
})->name('register-student')->middleware('auth');

Route::get('/register/company', function (){
    return view('forms.company');
})->name('register-company')->middleware('auth');;

Route::get('/create-application', function (){
    return view('pages.create-application');
})->middleware('auth')->name('create-application')->middleware('auth');

Route::get('/my-profile', function (){
    return view('pages.my-profile');
})->middleware('auth')->name('my-profile')->middleware('auth');


