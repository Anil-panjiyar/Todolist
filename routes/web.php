<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\ItemController;
 use App\Http\Controllers\RegistrationController;
 use App\Http\Controllers\DeatilsController;
 use App\Http\Controllers\TodolistController;
 use App\Models\test;
 use App\Models\Todolist;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|


// Route::get('/register',[RegistrationController::class,'index']);
// Route::post('/register',[RegistrationController::class,'register']);

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/    

  
   Route::get('/',[ItemController::class,'showItem']);

   Route::get('/register',[RegistrationController::class,'index']);

   Route::post('/register',[RegistrationController::class,'register']);
     
   Route::get('/test',function(){
      $test= test::all();
      echo"<pre>";
      print_r($test);

   });

   
   
Route::get('/details',[DeatilsController::class,'deal']);
Route::post('/details',[DeatilsController::class,'show']);
Route::get('/details/display',[DeatilsController::class,'display']);



Route::get('/',[TodolistController::class,'index'])->name('index');
Route::post('/',[TodolistController::class,'store'])->name('store');
Route::delete('/{todolist:id}',[TodolistController::class,'destroy'])->name('destroy');
