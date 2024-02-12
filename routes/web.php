<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\PassagerController;
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

    Route::controller(ChauffeurController::class)->prefix('chauffeurPages')->group(function () {
        
        Route::put('edit/{id}', 'update')->name('chauffeurProfile.update');
    
    });
    Route::controller(ChauffeurController::class)->prefix('layoutsChauffeur')->group(function () {
        Route::put('edit/{id}', 'updateStatus')->name('chauffeurStatus.update');
    });


    Route::get('chauffeurProfile', [ChauffeurController::class, 'chauffeurProfile'])->name('chauffeurProfile');
    Route::get('chauffeurHistorique', [ChauffeurController::class, 'chauffeurHistorique'])->name('chauffeurHistorique');
    Route::get('chauffeurReservation', [ChauffeurController::class, 'chauffeurReservation'])->name('chauffeurReservation');
});

// =========================Passager======================
Route::middleware(['auth', CheckRole::class . ':passager'])->group(function () {
    Route::get('dashboardPassager', function () {
        return view('dashboardPassager');
    })->name('dashboardPassager');

    Route::controller(PassagerController::class)->prefix('passagerPages')->group(function () {
        
        Route::put('edit/{id}', 'update')->name('passagerProfile.update');
    
    });

    Route::get('passagerProfile', [PassagerController::class, 'passagerProfile'])->name('passagerProfile');
    Route::get('passagerHistorique', [PassagerController::class, 'passagerHistorique'])->name('passagerHistorique');
    Route::get('passagerReservation', [PassagerController::class, 'passagerReservation'])->name('passagerReservation');
    Route::get('passagerFavorite', [PassagerController::class, 'passagerFavorite'])->name('passagerFavorite');
    Route::get('passagerRating', [PassagerController::class, 'passagerRating'])->name('passagerRating');
    Route::get('passagerSearsh', [PassagerController::class, 'passagerSearsh'])->name('passagerSearsh');
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