<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('users/registration','UserController@createUsers');   //for creating user
Route::get('users/update/{id}','UserController@updateUsers'); //for updating user
Route::post('users/delete/{id}','UserController@deleteUsers');  // for deleting user
Route::get('users','UserController@index'); // for retrieving user

Route::get('changePassword','UserAuthController@updateUsersPassword'); //for change password user
Route::post('login','UserAuthController@login'); //for logins

Route::post('transaction','TransactionInformationController@createTransaction'); //for creating patient transaction waiver
Route::post('getTransaction','TransactionInformationController@getTransaction'); //for retrieving transaction

Route::resource('institution', 'InstitutionController');
Route::resource('users', 'UserController');
Route::resource('patient', 'PatientController');

Route::post('getPatient','PatientController@getPatient');  //for retrieving patient
