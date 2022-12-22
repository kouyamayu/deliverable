<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GymController;

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

Route::get('/', [GymController::class,'index']);
Route::get('/gyms/delete', [GymController::class,'deletepage']);
Route::get('/gyms/prefecture',[GymController::class,'prefecture']);
Route::post('/gyms/city', [GymController::class, 'city']);
Route::post('/gyms/create', [GymController::class, 'create']);
Route::post('/gyms', [GymController::class, 'store']);
Route::post('/gyms/search',[GymController::class,'search']);
Route::get('/gyms/search',[GymController::class,'clear']);
Route::get('/gyms/{gym}', [GymController::class ,'show']);
Route::delete('/gyms/{gym}', [GymController::class,'delete']);