<?php

use App\Http\Controllers\MapController;
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

Route::get('/', 'App\Http\Controllers\BunkerController@landing');
Route::get('/about', 'App\Http\Controllers\BunkerController@about');
Route::get('/subscription', 'App\Http\Controllers\BunkerController@subscription');
Route::get('/firstaid', 'App\Http\Controllers\BunkerController@firstaid');
Route::get('/userpage', 'App\Http\Controllers\BunkerController@userpage');
Route::get('/vip', 'App\Http\Controllers\BunkerController@vip');
Route::get('/gold', 'App\Http\Controllers\BunkerController@gold');
Route::get('/silver', 'App\Http\Controllers\BunkerController@silver');
Route::get('/confirmation', 'App\Http\Controllers\BunkerController@confirmation');


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
