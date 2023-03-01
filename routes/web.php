<?php

use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\AboutControllers;
use App\Http\Controllers\ArticleControllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageControllers;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticlesController::class, 'articles']);
