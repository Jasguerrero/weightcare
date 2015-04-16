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
Route::resource('doctor.patient', 'PatientDoctorController',['except'=>['show']]);
Route::resource('diet.doctor.patient','DietDoctorPatientController');
Route::resource('recipe.diet','RecipeDietController');
Route::resource('appointment.doctor.patient','AppointmentDoctorPatientController');
Route::resource('clinicalrecord.patient','ClinicalRecordPatientController');

