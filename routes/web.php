<?php

use App\Http\Controllers\AuteurController;
use App\Http\Controllers\BigController;
use App\Http\Controllers\LittleController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/Auteur', AuteurController::class);
Route::resource('/Big', BigController::class);
Route::resource('/Little', LittleController::class);

