<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\hpController;
use App\Http\Controllers\merekController;

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

Route::get('/', [hpController::class, 'index']);
Route::get('/show/{id}', [hpController::class, 'show']);
Route::get('/createhp', [hpController::class, 'create']);
Route::get('/edithp/{id}', [hpController::class, 'edit']);
Route::post('/updatehp/{id}', [hpController::class, 'update']);
Route::post('/storehp', [hpController::class, 'store']);
Route::post('/storemerek', [merekController::class, 'store']);
Route::post('/destroyhp/{id}', [hpController::class, 'destroy']);
Route::get('/destroymerek/{id}', [merekController::class, 'destroy']);
Route::get('/createmerek', [merekController::class, 'create']);
