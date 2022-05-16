<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'show']);
Route::get('/search/', [SearchController::class, 'index']);

Route::get('/register/', [RegisterController::class, 'index']);

Route::get('/login/', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login/', [LoginController::class, 'authenticate']);
Route::get('/dashboard/', [DashboardController::class, 'index']);
