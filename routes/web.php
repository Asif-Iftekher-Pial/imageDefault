<?php

use App\Http\Controllers\TestController;
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

route::get('/view',[TestController::class,'index']);
route::post('/create',[TestController::class,'create'])->name('create');
route::get('/list',[TestController::class,'list'])->name('list');

route::get('/list/{id}',[TestController::class,'find'])->name('find');
route::post('/update/{id}',[TestController::class,'update'])->name('update');


