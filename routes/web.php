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

Route::get('send-email',[SendEmailController::class,'index'])
->name('send-email.index');
Route::post('send-email',[SendEmailController::class,'store'])
->name('send-email.store');