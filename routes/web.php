<?php

use App\Http\Controllers\FanigController;
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
Route::get('/',[FanigController::class,'login'])->name('login');
Route::get('/contact',[FanigController::class,'contact'])->name('contact');
Route::get('/home',[FanigController::class,'home'])->name('home');
Route::get('/index_blog',[FanigController::class,'blog'])->name('blog.index');

