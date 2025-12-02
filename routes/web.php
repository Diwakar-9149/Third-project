<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MessageController;

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

//------Admin login Routes------//
Route::get('/admin/login', function () {
    return view('admin.login');
})->name('admin.login');

Route::post('/admin/login', [MessageController::class, 'adminLogin'])
    ->name('admin.login.submit');

// Admin Protected Routes
Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin/messages', [MessageController::class, 'adminIndex'])
         ->name('admin.messages');

    Route::post('/admin/logout', function (Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login');
    })->name('admin.logout');

});
//admin
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
Route::post('/contact', [MessageController::class, 'store'])->name('contact.store');
//
Route::get('/blog', function (){
    return view('blog');
})->name('blog');
Route::get('/log', function(){
    return view('log');
});
//
//Route::post('/comments123',function(){
  //  echo "comments";
//});
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
// blog file mein post categories
Route::get('/business', function (){
    return view('business');
});
Route::get('/data', function(){
  return view('data');
});



