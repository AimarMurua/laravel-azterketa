<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YateaController;
use App\Http\Controllers\PertsonaController;
use App\Http\Controllers\AlkilerraController;


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
    return view('home');
});

//YATEAK
Route::get('/yateak', [YateaController::class, 'y_index']);
Route::get('/y_edit/{id}', [YateaController::class, 'y_edit']);
Route::post('y_update/{id}', [YateaController::class, 'y_update']);

//PERTSONAK
Route::get('/pertsonak', [PertsonaController::class, 'p_index']);

//ALOKAIRUAK
Route::get('/alkilerrak', [AlkilerraController::class, 'a_index']);

Route::get('/a_delete/{id}', [AlkilerraController::class, 'a_delete']);

Route::get('/a_edit/{id}', [AlkilerraController::class, 'a_edit']);

Route::get('/a_update/{id}', [AlkilerrakController::class, 'a_update']);