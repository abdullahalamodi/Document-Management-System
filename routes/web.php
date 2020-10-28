<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

Route::group(['prefix' => '/'], function () {
    Voyager::routes();
});

Route::get('/test', "testController@test");

//reports
Route::get('dms/reports', "reportsController@main");


//treatments
Route::get('dms/treatments', "treatmentsController@main");
Route::post('dms/treatments/direct', "treatmentsController@direct");
Route::post('dms/treatments/attach', "treatmentsController@attach");


//dashbord
Route::group(['prefix' => 'dms'], function () {
    Voyager::routes();
});
