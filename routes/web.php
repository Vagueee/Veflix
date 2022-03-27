<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VeflixController;
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
    return view('auth/register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('veflix', VeflixController::class);

Route::get('/veflix/create', function () {
    return view('create');
});

Route::get('/dashboard', [VeflixController::class, 'index']);

Route::post('/dashboard', [VeflixController::class, 'store']);

Route::put('/dashboard/{id}',[VeflixController::class, 'update']);

Route::get('/dashboard/{id}/edit',[VeflixController::class, 'edit']);

Route::get('/veflix/{id}/detail',[VeflixController::class, 'show']);

Route::delete('/veflix/{id}/detail',[VeflixController::class, 'destroy']);

require __DIR__.'/auth.php';
