<?php
use  App\Http\Controllers\Front\UserController;
use App\Http\Controllers\Front\FirstController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\NewsController;


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

Route::get('/test1/{id}', function () {
   return 'hello every one';
});

Route::get('/test2/{id?}', function () {
    return 'hi man';
});




Route::get('/', function () {

    return view('welcome');
});
  Route::namespace('Front')->group(function (){

    Route::get('/user', [UserController::class, 'showUser']);

});


Route::namespace('Front')->prefix('admin')->group(function () {


    Route::get('/post', [UserController::class, 'showUser']);

    Route::get('/delete', function () {
        return 'data deleted';
    });



   Route::  get('/data',[FirstController::class,'showData']);
    Route::  get('/doctor',[FirstController::class,'showDoctor']);
    Route::  get('/student',[FirstController::class,'showStudent']);
    Route::get('login',function (){
return 'please login Befor enter in';
    })->name('login');
});

Route::resource('news',NewsController::class);

Route::get('view',[UserController::class,'getview']);
Route::get('bland',[UserController::class,'getbland']);
Route::get('about',function (){
    return view('aboutus');
});

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');


