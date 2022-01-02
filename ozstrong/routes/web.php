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
 // Users Routes
Route::get('/', function () {
  return view('home');
});

Route::get('learn-more', function(){
 return view('learn_more');
});

Route::get('about-us',function(){
 return view('about_us');
});

Route::get('contact-us',function(){
  return view('contact_us');
});

Route::get('request-quote',function(){
 return view('request_quote');
}); 

Route::post('lead',[UserController::class,'lead']);

Route::post('subscribe',[UserController::class,'subscribe']);

Route::get('auckland-garage-doors',function(){
  return view('service-areas/auckland');
});

Route::get('garage-door-motor-replacement',function(){
  return view('service-areas/garage_door_motor_replacement');
});

Route::get('new-garage-doors',function(){
  return view('service-areas/new_garage_doors');
});

Route::get('new-garage-doors-auckland',function(){
  return view('service-areas/new_garage_doors_auckland');
});

Route::get('garage-door-repair',function(){
  return view('service-areas/garage_door_repair');
});

Route::get('sectional-door-openers',function(){
  return view('door-openers/sectional_door_opener');
});

Route::get('roller-door-openers',function(){
  return view('door-openers/roller_door_opener');
});

Route::get('roller-garage-doors',function(){
 return view('door-openers/roller_door_opener');
});

Route::get('garage-door-remotes',function(){
 return view('garage_door_remotes');
});

Route::get('repair-service',function(){
  return view('repair_and_service');
});

Route::get('garage-door-colours',function(){
  return view('garage_door_colour');
});

Route::get('gallery',function(){
  return view('gallery');
});

// End Users Routes


// Admin Routes
Route::get('admin',[AdminController::class,'index']);

Route::post('admin-login',[AdminController::class,'login']);

Route::get('admin-logout',[AdminController::class,'logout']);

Route::get('subscribers',[AdminController::class, 'subscribers']);

Route::get('contact-lead/{id}',[AdminController::class,'contact']);

Route::get('delete-lead/{id}',[AdminController::class,'delete']);

Route::get('approve-subscription/{id}',[AdminController::class,'approve_subscription']);

Route::get('cancel-subscription/{id}',[AdminController::class,'cancel_subscription']);

Route::get('delete-subscriber/{id}',[AdminController::class,'delete_subscriber']);

 // End Admin Routes