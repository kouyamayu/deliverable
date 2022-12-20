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
Route::post('/gyms/search',[GymController::class,'search']);
Route::get('/gyms/search',[GymController::class,'clear']);
Route::get('/gyms/sort',[GymController::class,'sort']);
Route::get('/gyms/{gym}', [GymController::class ,'show']);