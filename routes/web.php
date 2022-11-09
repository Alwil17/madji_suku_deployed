<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\Front\HomeController::class, 'index'])->name("home");
Route::get('/establishments', [\App\Http\Controllers\Front\EstablishmentController::class, 'index'])->name("establishments");
Route::get('/establishments/{slug}', [\App\Http\Controllers\Front\EstablishmentController::class, 'show'])->name("establishment.single");

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/img/{path}', [\App\Http\Controllers\ImagesController::class, 'show'])
    ->where('path', '.*')
    ->name('image');

require __DIR__.'/auth.php';
