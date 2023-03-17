<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AppointmentController;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('services',[ServiceController::class,'services']);
Route::get('service-details/{service_id}',[ServiceController::class,'services_details']);


Route::post('appointment',[AppointmentController::class,'addAppointment']);
Route::get('appointment',[AppointmentController::class,'getAppointment']);
Route::delete('appointment-delete/{appointment_id}',[AppointmentController::class,'deleteAppointment']);
Route::get('appointment-details/{appointment_id}',[AppointmentController::class,'appointment_details']);
Route::put('appointment-update/{appointment_id}',[AppointmentController::class,'appointment_update']);
