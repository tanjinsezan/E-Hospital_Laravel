<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ApiPatientController;
use App\Http\Controllers\ApiAdminController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//apiPatient
Route::get('/patient/list',[ApiPatientController::class,'list']);
Route::post('/patient/add',[ApiPatientController::class,'add']);
Route::post('/patient/login',[ApiPatientController::class,'login']);
Route::post('/patient/logout',[ApiPatientController::class, 'logout']);


//apiAdmin
Route::get('/admin/plist',[ApiAdminController::class,'list']);
Route::post('/admin/padd',[ApiAdminController::class,'add']);
Route::post('/admin/AdminLogin',[ApiAdminController::class,'AdminLogin']);
Route::post('/admin/logout',[ApiAdminController::class, 'logout']);