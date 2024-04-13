<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('books.index');
});

Route::get('/test',[BookController::class,'test'])->name('test.index');

Route::resource('books',BookController::class);

Route::resource('books.reviews',ReviewController::class)
->scoped([ 'review'=>'book' ])
->only(['create','store']);