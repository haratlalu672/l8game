<?php

use App\Http\Controllers\{HomeController, DashboardController, Game\GameController, Game\DeveloperController};
use Illuminate\Support\Facades\{Route, Auth};

Auth::routes();

Route::get('/', HomeController::class)->name('home');
Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', DashboardController::class)->name('dashboard');
    Route::resource('game', GameController::class);
    Route::resource('developer', DeveloperController::class);
});
