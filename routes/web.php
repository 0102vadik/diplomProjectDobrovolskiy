<?php

use App\Http\Controllers\AnnouncementsController;
use App\Http\Controllers\Profile\MyProfileController;
use App\Http\Controllers\SortController;
use App\Http\Controllers\StudentApplicationController;
use App\Http\Controllers\Vacancies\VacanciesCompanyController;
use App\Http\Controllers\Vacancies\VacanciesStudentController;
use App\Services\AnnouncementsService\AnnouncementsService;
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
Route::get('/home/student',[VacanciesStudentController::class, 'index'])->middleware('auth');

// ВРЕМЕННЫЕ РОУТЫ
Route::get('/home/student/more/{id}', [AnnouncementsController::class,'moreInfo'])
    ->middleware('auth')
    ->name('more-student');

Route::get('/home/company/more/{idStudents}', [VacanciesCompanyController::class,'moreInformation'])
    ->middleware('auth')
    ->name('more-company');

Route::get('/home/student/send-application/{idCompany}/{idCourse}', [StudentApplicationController::class,'index']);


Route::post('/home/student/send-application/serve', [StudentApplicationController::class,'sandApplication'])
    ->middleware('auth')
    ->name('newApplication');

Route::get('/my-applications/students', function () {
    return view('pages.student-applications');
})
    ->middleware('auth')
    ->name('studentApplications');



Route::get('/home/student/more/send-application/success', function (){
    return view('pages.status-of-sending.send-application-success');
})->name('success');

Route::get('/my-applications',
    [AnnouncementsController::class,'pageMyAnnouncements'])
    ->name('my-applications');
//-----------------

Route::get('/register/student', function (){
   return view('forms.student');
})->name('register-student');

Route::get('/register/company', function (){
    return view('forms.company');
})->name('register-company');

Route::get('/create-application', function (){
    return view('pages.create-application');
})->middleware('auth')->name('create-application')->middleware('auth');

Route::get('/my-profile/company', function (){
    return view('pages.my-profile');
})->middleware('auth')->middleware('auth')->name('my-profile');

Route::get('/my-profile', function(){
    if(Auth::user()->type_user == "Компания") {
        return redirect('/my-profile/company');
    }
    if(Auth::user()->type_user == "Студент") {
        return redirect('/my-profile/students');
    }
})->middleware('auth')->name('my-profile');

Route::get('/my-profile/students', [MyProfileController::class,'indexStudents'])->middleware('auth');
Route::get('/my-profile/company', [MyProfileController::class,'indexCompany'])->middleware('auth');

//Route::post('/applicationCreate/{idCompany}', [StudentApplicationController::class,'sandApplication'])->middleware('auth');

Route::post('/my-profile/update/company', [MyProfileController::class,'updateProfileCompany'])->middleware('auth')->name('updateProfileCompany');
Route::post('/my-profile/update/students', [MyProfileController::class,'updateProfileStudent'])->middleware('auth')->name('updateProfileStudents');

Route::post('/create-applications/create', [AnnouncementsController::class,'sandApplication'])->middleware('auth')->name('createApplicationsPost');
Route::get('/my-applications/delete/{id}', [AnnouncementsController::class,'deleteAnnouncements'])->middleware('auth');


Route::post('/sort/announcement',[SortController::class,'sortAnnouncements'])->middleware('auth')->name('sortAnnouncement');
Route::post('/sort/students',[SortController::class,'sortStudents'])->middleware('auth')->name('sortStudents');

