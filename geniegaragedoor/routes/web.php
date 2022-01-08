<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

/* Routes for user pages */

Route::get('/', function () {
    return view('home');
});

Route::post('lead',[UserController::class,'lead']);

Route::view('about','about');

Route::view('gallery','gallery');

Route::view('garage-doors-sydney','services/garage_doors_sydney');

Route::view('garage-door-motor-replacement','services/garage_door_motor_replacement');

Route::view('automatic-garage-roller-doors','services/automatic_garage_roller_doors');

Route::view('sectional-garage-doors-sydney','services/sectional_garage_doors_sydney');

Route::view('colorbond-sectional-garage-doors','services/colorbond_sectional_garage_doors');

Route::view('contact','contact');

/* End of user Pages routes */

/* Admin Routes */
Route::get('admin',[AdminController::class,'index']);

Route::post('admin-login',[AdminController::class,'login']);

Route::get('admin-logout',[AdminController::class,'logout']);

Route::get('contact-lead/{id}',[AdminController::class,'contact']);

Route::get('delete-lead/{id}',[AdminController::class,'delete']);

/* End of Admin Routes */





