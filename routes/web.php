<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SAWController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\NormalizeController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\WeightController;

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
    return view('home',[
        "title" => "Home",
    ]);
});
Route::get('/about', function () {
    return view('about',[
        "title" => "About",
    ]);
});

Route::get('/signin', [SignInController::class, 'index'])->name('signin')->middleware('guest');
Route::post('/signin', [SignInController::class, 'authenticate']);
Route::post('/signout', [SignInController::class, 'signout']);

Route::get('/signup', [SignUpController::class, 'index'])->middleware('guest');
Route::post('/signup', [SignUpController::class, 'store']);

Route::resource('/saw', SAWController::class)->middleware('auth');
Route::put('saw/{id}', 'SAWController@update');
Route::post('saw_del', [SAWController::class, 'delete']);
Route::get('/input', [SAWController::class, 'create'])->middleware('auth');

Route::resource('/normalize', NormalizeController::class)->middleware('auth');
Route::get('/weight', [WeightController::class, 'index'])->middleware('auth');
//Route::put('weight/{id}', 'WeightController@update');
Route::put('weight/{id}', [WeightController::class, 'update']);

Route::resource('/ranking', RankingController::class)->middleware('auth');

