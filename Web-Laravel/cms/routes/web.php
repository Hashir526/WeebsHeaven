<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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
    return view('Home');
});

Route::get('/About', function () {
    return view('About');
});

Route::get('/Login', function () {
    return view('Login');
});

Route::get('/Profile', function () {
    return view('Profile');
});

Route::get('/SignUp', function () {
    return view('SignUp');
});

Route::get('/TopRanked', function () {
    return view('TopRanked');
});

Route::get('/Trending', function () {
    return view('Trending');
});

Route::get('/Details', function () {
    return view('Details');
});

Route::get('/DetailsDBZ', function () {
    return view('DetailsDBZ');
});

Route::get('/Admin', function () {
    return view('Admin');
});

Route::get('SignUp', [RegisterController::class, 'create'])->middleware('guest');
Route::post('SignUp', [RegisterController::class, 'store'])->middleware('guest');
Route::post('logout', [RegisterController::class, 'destroy'])->middleware('auth');