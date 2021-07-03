<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\SendEmailController;
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

Route::get('/',[MainController::class,'index']
)->name('home');

Route::get('sendemail',[SendEmailController::class,'index'])
->name('sendemail.index');
Route::post('sendemail',[SendEmailController::class,'store'])
->name('sendemail.store');