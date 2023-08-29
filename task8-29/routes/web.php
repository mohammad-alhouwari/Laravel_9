<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestCon;
use App\Http\Controllers\LoginCon;

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

Route::get('/hello', function () {
    return '<h1>Welcome</h1>';
});

Route::get('/test/{name}', function ($name) {
    return '<h1>Welcom '. $name .'</h1>';
});

Route::get('/con', [TestCon::class, 'test']);


// Route::get('posts',[Users::class,'showUsers']);



Route::get('/info', function () {
    $adds = ['add 1','add 2','add 3'];
    return view('info', ['name' => 'mohammad', 'adds' => $adds]);
});


// Route::get('/login', function () {
//     return view('login');
// });


Route::post('user', [LoginCon::class, 'login']);
Route::view('login','login');
Route::view('home','home');