<?php

use App\Http\Controllers\GamesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home',[GamesController::class, 'index']);

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contact', [GamesController::class, 'create']);

Route::put('/update/{id}', [GamesController::class, 'update'])->name('update');

Route::delete('/home/{id}',[GamesController::class, 'destroy'])->name('destroy');


Route::get('profile/{username?}', function (Request $request, $username = null) {
    if (isset($username)) {
        return view('profile', ['username' => $username]);w
    } else {
        return view('profile', ['username' => 'Guest']);
    }
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
