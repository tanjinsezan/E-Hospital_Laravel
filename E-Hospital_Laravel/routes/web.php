<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReceptionistController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HospitalController;
use App\Http\Middleware\ValidPatient;
use App\Http\Controllers\Request;

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
    return view('welcome');
});

Route::get('/publichome', function () {
    return view('publichome');
});

//admin
Route::get('/AdDash', [AdminController::class,'AdDash'])->name('AdDash');
Route::get('/loginAd',[AdminController::class,'loginAd'])->name('loginAd');
Route::post('/loginAd',[AdminController::class,'loginAdSubmit'])->name('loginAd');
Route::get('/logout',[PatientController::class,'logout'])->name('logout');
Route::get('/AdCreate',[AdminController::class,'AdCreate'])->name('AdCreate')->middleware('ValidAdmin'); 
Route::post('/AdCreate',[AdminController::class,'AdCreateSubmitted'])->name('AdCreate');

//patient
Route::get('/login',[PatientController::class,'login'])->name('login');
Route::post('/login',[PatientController::class,'loginSubmit'])->name('login');
Route::get('/logout',[PatientController::class,'logout'])->name('logout');
Route::get('/Dash', [PatientController::class,'Dash'])->name('Dash');
Route::get('/patientCreate',[PatientController::class,'patientCreate'])->name('patientCreate');
Route::post('/patientCreate',[PatientController::class,'patientCreateSubmitted'])->name('patientCreate');
Route::get('/BookApp',[AppointmentController::class,'BookApp'])->name('BookApp');
Route::post('/BookApp',[AppointmentController::class,'BookAppSubmitted'])->name('BookApp');


//doctor
Route::get('/loginDoc',[DoctorController::class,'loginDoc'])->name('loginDoc');
Route::post('/loginDoc',[DoctorController::class,'loginDocSubmit'])->name('loginDoc');
Route::get('/DocDash', [DoctorController::class,'DocDash'])->name('DocDash');
Route::get('/logout',[DoctorController::class,'logout'])->name('logout');
Route::get('/DocCreate',[DoctorController::class,'DocCreate'])->name('DocCreate');
Route::post('/DocCreate',[DoctorController::class,'DocCreateSubmitted'])->name('DocCreate');
Route::get('/DoctorList',[DoctorController::class,'DoctorList'])->name('DoctorList');
Route::get('/DoctorEdit/{id}',[DoctorController::class,'DoctorEdit'])->name('DoctorEdit');
Route::post('/DoctorEdit',[DoctorController::class,'DoctorEditSubmitted'])->name('DoctorEditSubmitted');
Route::get('/DoctorDelete/{id}',[DoctorController::class,'DoctorDelete'])->name('DoctorDelete');


//hospital
Route::get('/hosCreate',[HospitalController::class,'hosCreate'])->name('hosCreate');
Route::post('/hosCreate',[HospitalController::class,'hosCreateSubmitted'])->name('hosCreate');
Route::get('/HospitalList',[HospitalController::class,'HospitalList'])->name('HospitalList');
// Route::get('/search',HospitalController::class,'search')->name('search');

//appointment
Route::get('/CheckApp',[AppointmentController::class,'AppList'])->name('AppList');
Route::get('/AppDelete/{id}',[AppointmentController::class,'AppDelete'])->name('AppDelete');

//receptionist
Route::get('/loginRes',[ReceptionistController::class,'loginRes'])->name('loginRes');
Route::post('/loginRes',[ReceptionistController::class,'loginResSubmit'])->name('loginRes');
Route::get('/ResDash', [ReceptionistController::class,'ResDash'])->name('ResDash');