<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoEditor;


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

// Route::get('/', function () {
//   return view('home');
// });
// Route::get('/about', function () {
//   return view('about');
// });
// Route::get('/courses', function () {
//   return view('courses');
// });

Route::get('/',[demoController::class,'index']);
Route::get('/about','App\Http\Controllers\demoController@about');
Route::get('/courses',SingleActionController::class);
Route::resource('/photo','App\Http\Controllers\PhotoEditor');

