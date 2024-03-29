<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ReplyController;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\ReplyRequest;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Requests\EventRequest;
use App\Http\Controllers\ParticipationController;
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


Route::get('/dashboard',function () {
    return view('posts/index');}
)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/comments', function () {
    return view('comments/index');
})->middleware(['auth', 'verified'])->name('comment');

Route::get('/comment', [CommentController::class, 'index'])->name('index');
Route::get('/comments/create', [CommentController::class, 'create'])->name('create');
Route::get('/comments/{comment}', [CommentController::class ,'show'])->name('show');
Route::post('/comments', [CommentController::class, 'store']);
Route::put('/comments/{comment}', [CommentController::class, 'update']);
Route::delete('/comments/{comment}', [CommentController::class,'delete']);
Route::get('/comments/{comment}/edit', [CommentController::class, 'edit']);

Route::get('/categories/{category}', [CategoryController::class,'index'])->middleware("auth");

Route::get('/comments/{comment}/replies', [ReplyController::class, 'create'])->name('reply.create');
Route::post('/comments/replies', [ReplyController::class, 'store'])->name('reply.store');

Route::get('/events', function () {
    return view('events/index');
})->middleware(['auth', 'verified'])->name('event');

Route::get('/event', [EventController::class, 'index'])->name('event');
Route::get('/events/create', [EventController::class, 'create'])->name('create');
Route::get('/events/{event}', [EventController::class ,'show'])->name('show');
Route::post('/events', [EventController::class, 'store']);
Route::put('/events/{event}', [EventController::class, 'update']);
Route::delete('/events/{event}', [EventController::class,'delete']);
Route::get('/events/{event}/edit', [EventController::class, 'edit']);

Route::get('/events/{event}/participants', [ParticipationController::class, 'create'])->name('participation.create');
Route::post('/events/participants', [ParticipationController::class, 'store'])->name('participation.store');

require __DIR__.'/auth.php';

