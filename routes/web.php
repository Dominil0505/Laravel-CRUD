<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;

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

Route::get('/', [StudentController::class, 'index']);

Route::get('/test', [TestController::class, 'index']);

// create user
Route::get('/create', [StudentController::class, 'create']);

// store user in database
Route::post('/create', [StudentController::class, 'store']);

Route::get('/show/{id}', [StudentController::class, 'show']);

Route::get('/edit/{id}', [StudentController::class, 'edit']);

Route::post('edit/{id}', [StudentController::class, 'update']);

// delete is missing yet
