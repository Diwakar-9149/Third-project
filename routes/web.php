<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;

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
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', [CommentController::class, 'index'])->name('index');
//
Route::get('/about', function () {
    return view('about');
});
//
Route::get('/contact', function (){
    return view('contact');
})->name('contact');
//
Route::get('/blog', function (){
    return view('blog');
})->name('blog');
Route::get('/log', function(){
    return view('log');
});
//
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');



