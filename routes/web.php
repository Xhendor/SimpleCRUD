<?php
use App\Http\Controllers\HolaController;
use App\Http\Controllers\PersonaController;

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

Auth::routes();

Route::
get('/home',
    [App\Http\Controllers\HomeController::class,
        'index'])->name('home');

//Route::
//get('/hola',
//    [App\Http\Controllers\HolaController::class,
//        'index'])->name('hola');
Route::resource('hola', HolaController::class);
Route::resource('persona', PersonaController::class);
