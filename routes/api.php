<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\GestionnaireController;
//use App\Http\Controllers\ChambresController;
//use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('hotels', HotelController::class);
Route::resource('reservations', ReservationController::class);
Route::resource('gestionnaires', GestionnaireController::class);

// get imagedata of hotel
Route::get('hotels/{id}/image', [HotelController::class, 'getImage']);
//Route::resource('users', UsersController::class);

