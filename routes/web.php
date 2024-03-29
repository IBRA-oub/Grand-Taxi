<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\PassagerController;
use App\Http\Controllers\ReservationController;
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

    Route::get('chauffeurProfile', [ReservationController::class, 'ratingChauffeur'])->name('chauffeurProfile');

    Route::get('chauffeurReservation', [ReservationController::class, 'indexChauffeur'])->name('chauffeurReservation');
    Route::get('chauffeurHistorique', [ReservationController::class, 'historiqueChauffeur'])->name('chauffeurHistorique');


});

// =========================Passager======================
Route::middleware(['auth', CheckRole::class . ':passager'])->group(function () {
    Route::get('dashboardPassager', function () {
        return view('dashboardPassager');
    })->name('dashboardPassager');

    Route::controller(PassagerController::class)->prefix('passagerPages')->group(function () {
        
        Route::put('editP/{id}', 'update')->name('passagerProfile.update');
        Route::get('/search',  'search')->name('reservation.searsh');
        Route::get('/searchR',  'searchRapide')->name('reservationRapide.searsh');
        Route::get('/searchVoiture',  'searchVoiture')->name('searshVoiture.searsh');
        Route::get('/searchRating',  'searchRating')->name('searshRating.searsh');
        Route::delete('cancel/{id}',  'destroyReservation')->name('deleteReservation');
    
    });

    Route::get('passagerProfile', [PassagerController::class, 'passagerProfile'])->name('passagerProfile');
    Route::get('passagerRating/{id}', [PassagerController::class, 'passagerRating'])->name('passagerRating');

    Route::get('passagerHistorique', [ReservationController::class, 'historiqueShow'])->name('passagerHistorique');
    Route::get('passagerFavorite', [ReservationController::class, 'favoriteShow'])->name('passagerFavorite');
    Route::get('passagerReservation', [ReservationController::class, 'index'])->name('passagerReservation');
    
    Route::controller(ReservationController::class)->prefix('passagerPages')->group(function () {
        
        Route::post('passagerReservation', 'store')->name('reservation.create');
        Route::put('favorite/{id}', 'favoriteUpdate')->name('favorite.update');
        Route::put('edit/{id}', 'update')->name('rating.update');
    
    });
});

// =======================Admin===========================

Route::middleware(['auth', CheckRole::class . ':admin'])->group(function () {
    Route::get('dashboardAdmin', function () {
        return view('dashboardAdmin');
    })->name('dashboardAdmin');
    
    Route::controller(AdminController::class)->prefix('adminPages')->group(function () {
        
        Route::put('edit/{id}', 'update')->name('adminProfile.update');
    });
    
    Route::get('dashboardAdmin', [AdminController::class, 'statistique'])->name('dashboardAdmin');

    Route::get('adminChauffeurs', [AdminController::class, 'showChauffeur'])->name('adminChauffeurs');
    Route::get('adminChauffeurs/{id}', [AdminController::class, 'archiver'])->name('adminChauffeurs.update');

  
    Route::get('adminPassagers', [AdminController::class, 'showPassager'])->name('adminPassagers');
    Route::get('adminPassagers/{id}', [AdminController::class, 'archiverPassager'])->name('adminPassagers.update');

    Route::get('adminReservation', [AdminController::class, 'showReservation'])->name('adminReservation');
    Route::get('adminReservation/{id}', [AdminController::class, 'archiverReservation'])->name('adminReservation.update');
    
    Route::get('adminProfile', [AdminController::class, 'adminProfile'])->name('adminProfile');
   
  

});