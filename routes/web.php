<?php

use App\Http\Controllers\AuteurController;
use App\Http\Controllers\BigController;
use App\Http\Controllers\LittleController;
use App\Models\Auteur;
use App\Models\Big;
use App\Models\Little;
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
    $littles= Little::all();
    $bigs= Big::all();
    $auteurs= Auteur::all();
    return view('welcome' , compact('littles','bigs', 'auteurs'));
});
Route::get('/backoffice', function () {
    $littles= Little::all();
    $bigs= Big::all();
    $auteurs= Auteur::all();
    return view('pages.backoffice' , compact('littles','bigs', 'auteurs'));
});
Route::resource('/auteur', AuteurController::class);
Route::resource('/big', BigController::class);
Route::resource('/little', LittleController::class);

