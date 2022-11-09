<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [\App\Http\Controllers\API\UserController::class, 'store'])->name("register.api");
Route::get('login', [\App\Http\Controllers\API\PassportAuthController::class, 'index']);
Route::post('login', [\App\Http\Controllers\API\PassportAuthController::class, 'login'])->name("login.api");
Route::post('logout', [\App\Http\Controllers\API\PassportAuthController::class, 'logout'])->name("logout.api");

Route::middleware('auth:api')->group(function () {
    Route::get('get-user', [\App\Http\Controllers\API\PassportAuthController::class, 'userInfo']);

    Route::apiResource('users', \App\Http\Controllers\API\UserController::class);

    Route::apiResource('addresses', \App\Http\Controllers\API\AddressController::class);
    Route::apiResource('exams', \App\Http\Controllers\API\ExamController::class);
    Route::apiResource('results', \App\Http\Controllers\API\ResultController::class);
    Route::apiResource('services', \App\Http\Controllers\API\ServiceController::class);
    Route::apiResource('categories', \App\Http\Controllers\API\CategoryController::class);
    Route::apiResource('ratings', \App\Http\Controllers\API\RatingController::class);

});
Route::apiResource('etablissements', \App\Http\Controllers\API\EstablishmentController::class);



