<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
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
    return view('login');
});
Route::post('/check-login', [AppController::class, 'checkLogin']);
Route::get('/rent', [AppController::class, 'rent']);
Route::get('/sell', [AppController::class, 'sell']);
Route::get('/appointment', [AppController::class, 'appointment']);
Route::get('/dashboard', [AppController::class, 'dashboard']);
Route::get('/new-rent', [AppController::class, 'newRent']);
Route::post('/add-rent', [AppController::class, 'addRent']);
Route::get('/new-sell', [AppController::class, 'newSell']);
Route::post('/add-sell', [AppController::class, 'addSell']);
Route::get('/new-appointment', [AppController::class, 'newApt']);
Route::post('/add-appointment', [AppController::class, 'addApt']);
