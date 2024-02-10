<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\CheckRole;


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


Route::controller(AuthController::class)->group(function (){
    Route::get('register','register')->name('register');
    Route::post('register','registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout' , 'logout')->middleware('auth')->name('logout');
});

// =====================chauffeur======================
Route::middleware(['auth', CheckRole::class . ':chauffeur'])->group(function () {
    Route::get('dashboardChauffeur', function () {
        return view('dashboardChauffeur');
    })->name('dashboardChauffeur');
});

// =========================Passager======================
Route::middleware(['auth', CheckRole::class . ':passager'])->group(function () {
    Route::get('dashboardPassager', function () {
        return view('dashboardPassager');
    })->name('dashboardPassager');
});

// =======================Admin===========================

Route::middleware(['auth', CheckRole::class . ':admin'])->group(function () {
    Route::get('dashboardAdmin', function () {
        return view('dashboardAdmin');
    })->name('dashboardAdmin');

    Route::controller(AdminController::class)->prefix('adminPages')->group(function () {
        
        Route::put('edit/{id}', 'update')->name('adminProfile.update');
    });

    
    Route::get('adminProfile', [AdminController::class, 'adminProfile'])->name('adminProfile');
    Route::get('adminPassagers', [AdminController::class, 'adminPassagers'])->name('adminPassagers');
    Route::get('adminChauffeurs', [AdminController::class, 'adminChauffeurs'])->name('adminChauffeurs');
    Route::get('adminReservation', [AdminController::class, 'adminReservation'])->name('adminReservation');
});