<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AccountsController;



Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/test', 'TestController@index');

// Authentication Routes...
Route::namespace('Auth')->group(function () {
    Route::get('/', 'LoginController@showLoginForm')->name('auth.showloginform');
    Route::get('/login', 'LoginController@showLoginForm')->name('login');
    Route::post('/login', 'LoginController@login')->name('auth.postLogin');
    Route::get('/logout', 'LoginController@logout')->name('auth.logout');
    Route::match(['get', 'post'], '/logout', 'LoginController@logout')->name('logout');
});

// Dashboard Routes
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/line-chart', [DashboardController::class, 'lineChart']);

// Accounts Routes
Route::group(['prefix' => 'accounts'], function () {
    
    
    Route::any('/', [AccountsController::class, 'index'])->name('accounts');
    Route::post('/update-plan-name', [AccountsController::class, 'updatePlanName'])->name('update.plan.name');
    Route::get('/details/{id}', [AccountsController::class, 'details'])->name('details.index');
    Route::delete('/users/soft-delete/{id}', [AccountsController::class, 'softDelete'])->name('users.softDelete');
    Route::get('/users/create', [AccountsController::class, 'createUser'])->name('users.create');
    Route::post('/users/store', [AccountsController::class, 'storeUser'])->name('users.store');
    Route::post('/users/add', [AccountsController::class, 'addUser'])->name('users.add');
    Route::post('/deactivate-account/{id}', [AccountsController::class, 'deactivateAccount'])->name('account.deactivate');
    Route::post('/activate-account/{id}', [AccountsController::class, 'activateAccount'])->name('account.activate');
    Route::post('/update/trial_ends_date/{id}', [AccountsController::class, 'updateTrialPeriod'])->name('update.trial_ends_date');
    Route::post('/users/{id}', [AccountsController::class, 'updateUser'])->name('users.update');

});
