<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoEditor;
use App\Http\Controllers\RegisterUser;
use App\Models\Customers;
use Illuminate\Http\Request;

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
Route::get('/',function (){
    return view('index')->name('home');
});
// Route::get('/',[demoController::class,'index']);
Route::get('/about','App\Http\Controllers\demoController@about');
Route::get('/courses',SingleActionController::class);
Route::resource('/photo','App\Http\Controllers\PhotoEditor');
Route::get('/register',[RegisterUser::class,'index'])->name('register.index');
Route::post('/register',[RegisterUser::class,'GetUser']);
Route::get('/customer',[CustomerController::class,'index'])->name('customer.index');
Route::get('/customer/view',[CustomerController::class,'view']);
Route::post('/customer',[CustomerController::class,'store']);

Route::get('get-all-session',function(){
$session = session()->all();
print_r($session);
});
Route::get('set-session',function(Request $request){
$request->session()->put('name','Amir Ali');
$request->session()->put('address','Susan Road 213');
$request->session()->put('last_name','amir@gmail.com');

return redirect('get-all-session');
});
route::get('destroy-session',function(){
session()->forget(['name','email','last_name']);

return redirect('get-all-session');
});




