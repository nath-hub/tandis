<?php

use App\Http\Controllers\EnterpriseController;
use App\Http\Controllers\ForgotPassword;
use App\Http\Controllers\InvestController;
use App\Http\Controllers\PhaseController;
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


Route::get('/', [EnterpriseController::class, 'index'])->name('enterprise.index');

Route::get('/about', function () {
    return view('about');
});



Route::get('/login', function () {
    return view('login');
});


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

    // Route::resource('/phases', PhaseController);

    Route::get('/', [PhaseController::class, 'index'])->name('phases.index');
    Route::get('/create', [PhaseController::class, 'create'])->name('phases.create');
    Route::post('store/', [PhaseController::class, 'store'])->name('phases.store');
    Route::get('/{phase}/show', [PhaseController::class, 'show'])->name('phases.show');
    Route::get('/{phase}/edit', [PhaseController::class, 'edit'])->name('phases.edit');
    Route::put('/{phase}/update', [PhaseController::class, 'update'])->name('phases.update');
    Route::delete('/{phase}/delete', [PhaseController::class, 'destroy'])->name('phases.destroy');

    Route::get('/service', [EnterpriseController::class, 'service'])->name('home.service');
    Route::get('/contact', [EnterpriseController::class, 'contact'])->name('home.contact');
    Route::get('/projet', [EnterpriseController::class, 'projet'])->name('home.projet');
    Route::get('/about', [EnterpriseController::class, 'about'])->name('home.about');

    // Route::post('/store', function (InvestStoreRequest $request) {
    //     dd($request->all());
    // })->name('invest.store'); 

    Route::get('/', [InvestController::class, 'index'])->name('invest.index');
    Route::get('/create/{enterprise}', [InvestController::class, 'create'])->name('invest.create');
    Route::post('/store/{enterprise}', [InvestController::class, 'store'])->name('invest.store')->middleware('auth');
    Route::get('/{invest}/show', [InvestController::class, 'show'])->name('invest.show');
    Route::get('/{invest}/edit', [InvestController::class, 'edit'])->name('invest.edit');
    Route::put('/{invest}/update', [InvestController::class, 'update'])->name('invest.update');
    Route::delete('/{invest}/delete', [InvestController::class, 'destroy'])->name('invest.destroy');
});

Route::group(['prefix' => 'tandis/public/invest/'], function () {
   
});