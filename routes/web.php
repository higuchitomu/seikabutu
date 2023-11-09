<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', [ProfileController::class, 'index']);
    Route::get('/thread', [ProfileController::class, 'thread'])->name('thread');
    Route::get('/vote', [ProfileController::class, 'vote'])->name('vote');
     Route::get('/event', [ProfileController::class, 'event'])->name('event');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/thread', function () {
    return view('thread');
})->middleware(['auth', 'verified'])->name('thread');

Route::get('//posts/{post}', [CommentController::class, 'index']);
Route::get('/comments/create', [CommentController::class, 'create']);
Route::get('/comments/{comment}', [CommentController::class ,'show']);
Route::post('/comments', [CommentController::class, 'store']);

require __DIR__.'/auth.php';

