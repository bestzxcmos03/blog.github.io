<?php

use App\Http\Controllers\courseController;
use App\Http\Controllers\registrationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('students',studentController::class);
Route::resource('courses',courseController::class);
Route::resource('registrations',registrationController::class);