<?php

use App\Http\Controllers\ForgotPassword;
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

Route::get('/log', [UserController::class, 'log']);

Route::post('/login', [UserController::class, 'login'])->name('login');


Route::group(['prefix' => 'tandis/public/users'], function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/create', [UserController::class, 'store'])->name('users.store');
    Route::get('/{user}/show', [UserController::class, 'show'])->name('users.show');
    Route::get('/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::patch('/{user}/update', [UserController::class, 'update'])->name('users.update');
    Route::delete('/{user}/delete', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('/logout', [Usercontroller::class, 'logout'])->name('users.logout')
        ->middleware('auth');

    Route::post('/forgot-password', [ForgotPassword::class, 'store']);
    Route::post('/forgot-password/{token}', [ForgotPassword::class, 'reset']);
});
