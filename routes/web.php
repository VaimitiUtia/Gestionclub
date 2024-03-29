<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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
    return view('bienvenue');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/apropos', function () {
    return view('pages/apropos');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/users', [\App\Http\Controllers\UsersController::class, 'index'])->middleware(['auth',
    'admin'])->name('users');


Route::delete('/users/{id}', [\App\Http\Controllers\UsersController::class,
    'destroy'])->middleware(['auth', 'admin'])->name('users.destroy');


Route::get('/dashboard', function () { return view('dashboard');} )
    ->middleware(['auth'])->name('dashboard');


Route::get('/users', [\App\Http\Controllers\UsersController::class, 'index'])->middleware(['auth',
    'admin'])->name('users');


Route::get('/users/profile/{user}', [\App\Http\Controllers\UsersController::class, 'show'])
    ->name('users.show');


Route::get('/users/{user}', [\App\Http\Controllers\UsersController::class, 'edit'])
    ->middleware(['auth'])->name('users.edit');


Route::put('/users/{user}', [\App\Http\Controllers\UsersController::class, 'update'])
    ->middleware(['auth'])->name('users.update');


Route::delete('/users/{user}', [\App\Http\Controllers\UsersController::class, 'destroy'])
    ->middleware(['auth', 'admin'])->name('users.destroy');


Route::get('/users', [\App\Http\Controllers\UsersController::class, 'index'])
    ->middleware(['auth', 'admin'])->name('users');

require __DIR__.'/auth.php';


