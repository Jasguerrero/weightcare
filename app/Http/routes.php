<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('doctor','DoctorController');
Route::resource('patient','PatientController',['only'=>['index','show']]);
Route::resource('doctor.patient', 'DoctorPatientController',['except'=>['show']]);
Route::resource('diet','DietController',['only'=>['index','show']]);
Route::resource('doctor.diet','DoctorDietController',['except'=>['show']]);
Route::resource('patient.diet','PatientDietController',['only'=>['index']]);
Route::resource('diet.recipe','DietRecipeController',['except'=>['show']]);
Route::resource('doctor.appointment','DoctorAppointmentController',['except'=>['show']]);
Route::resource('patient.appointment','PatientAppointmentController',['only'=>['index']]);
Route::resource('patient.clinicalrecord','PatientClinicalRecordController',['except'=>['show']]);

