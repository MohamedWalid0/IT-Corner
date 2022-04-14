<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProcedureController;
use Illuminate\Support\Facades\Route;

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

Route::resource('/appointments', AppointmentController::class)->except(['index' ,'show']);

Route::get('/appointments/{appointment}' , [AppointmentController::class , 'show']) -> name('appointments.show') ;
Route::get('/appointments/getDayAppointments/{day?}' , [AppointmentController::class , 'index']) -> name('appointments.index') ;
Route::post('/appointments/{patient}' , [AppointmentController::class , 'book']) -> name('appointments.book') ;
Route::post('/appointments/assignAssessments/{appointment}' , [AppointmentController::class , 'assignAssessments']) -> name('appointments.assignAssessments') ;


Route::resource('/procedures', ProcedureController::class);
Route::resource('/assessments', AssessmentController::class);
Route::resource('/patients', PatientController::class);
Route::post('/patients/assignProcedures/{patient}' , [PatientController::class , 'assignProcedures']) -> name('patients.assignProcedures') ;
Route::get('/bills/{patient}' , [BillController::class , 'show']) -> name('bills.show') ;

