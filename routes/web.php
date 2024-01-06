<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\HistoryPendaftaranController;

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

Route::get('/', [PublicController::class, 'index'])->name('home');


Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticating']);
    Route::get('register', [AuthController::class, 'register']);
    Route::post('register', [AuthController::class, 'registerProcess']);

});

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('dashboard-user', [UserController::class, 'dashboardUser'])->name('dashboard.user');
    Route::get('formulir', [FormulirController::class, 'index'])->name('formulir.index');
    Route::get('formulir/create', [FormulirController::class, 'create'])->name('formulir.create');
    Route::put('formulir/store', [FormulirController::class, 'store'])->name('formulir.store');
    Route::get('formulir/{id}/edit', [FormulirController::class, 'edit'])->name('formulir.edit');
    Route::put('formulir/{id}/update', [FormulirController::class, 'update'])->name('formulir.update');
    //histori nya ini
    Route::get('history-pendaftaran', [HistoryPendaftaranController::class, 'index'])->name('history.index');
    Route::get('history-pendaftaran/{user_id}', [HistoryPendaftaranController::class, 'show'])->name('history.show');

    Route::get('edit-user/{slug}', [UserController::class, 'edit'])->name('edit-user');
    Route::put('update-user/{slug}', [UserController::class, 'update'])->name('update-user');

    
    Route::get('formulir/cetak_pdf/{id}', [FormulirController::class, 'cetak_pdf'])->name('formulir.cetak_pdf');
    




    Route::get('profile', [UserController::class, 'profile'])->middleware('only_client');

   

    Route::middleware('only_admin')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index']);



        Route::get('users', [UserController::class, 'index']);
        Route::get('registered-users', [UserController::class, 'registeredUsers']);
        Route::get('user-detail/{slug}', [UserController::class, 'show']);
        Route::get('user-approve/{slug}', [UserController::class, 'approve']);
        Route::get('user-ban/{slug}', [UserController::class, 'delete']);
        Route::delete('user-ban/{slug}', [UserController::class, 'destroy']);
        Route::get('user-deleted', [UserController::class, 'bannedUsers']);
        Route::get('user-restore/{slug}', [UserController::class, 'restore']);
        Route::delete('user-permanent-ban/{slug}', [UserController::class, 'permanentDelete']);



    });
});
