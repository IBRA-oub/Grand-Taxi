<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChauffeurAuthController;
use App\Http\Controllers\PassagerAuthController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::controller(ChauffeurAuthController::class)->group(function (){
    Route::get('chauffeurRegister','chauffeurRegister')->name('chauffeurRegister');
    Route::get('chauffeurRegister','chauffeurRegisterSave')->name('chauffeurRegister.save');
});

Route::controller(PassagerAuthController::class)->group(function (){
    Route::get('passagerRegister','passagerRegister')->name('passagerRegister');
    Route::post('passagerRegister','passagerRegisterSave')->name('passagerRegister.save');

    Route::get('login', 'loginPassager')->name('loginPassager');
    Route::post('login', 'loginPassagerAction')->name('loginPassager.action');
});