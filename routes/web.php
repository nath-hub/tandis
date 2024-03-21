<?php

use App\Http\Controllers\EnterpriseController;
use App\Http\Controllers\ForgotPassword;
use App\Http\Controllers\InvestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});

// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/log', [UserController::class, 'log'])->name('log')->middleware('auth');

Route::post('/login', [UserController::class, 'login'])->name('login');


Route::group(['prefix' => 'tandis/public/users'], function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/create', [UserController::class, 'store'])->name('users.store');
    Route::get('/{user}/show', [UserController::class, 'show'])->name('users.show');
    Route::get('/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/{user}/update', [UserController::class, 'update'])->name('users.update');
    Route::delete('/{user}/delete', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('/logout', [Usercontroller::class, 'logout'])->name('users.logout')
        ->middleware('auth');

    Route::post('/forgot-password', [ForgotPassword::class, 'store']);
    Route::post('/forgot-password/{token}', [ForgotPassword::class, 'reset']);

    
});

Route::group(['prefix' => 'tandis/public'], function () {
    Route::get('/{enterprise}/edit', [EnterpriseController::class, 'edit'])->name('enterprise.edit')->middleware('auth');
    Route::put('/{enterprise}/update', [EnterpriseController::class, 'update'])->name('enterprise.update');

    Route::get('/invest', [InvestController::class, 'index'])->name('invest.index')->middleware('auth');
    Route::post('/invest', [InvestController::class, 'create'])->name('invest.create')->middleware('auth');


});