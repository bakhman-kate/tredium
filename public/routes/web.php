<?php

use App\Http\Controllers\{ArticleController, MainPageController, TagController};
use Illuminate\Support\Facades\{Redirect, Route};

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

// Main page
Route::get('/', [MainPageController::class, 'index'])->name('home');

// Articles catalog
Route::get('/articles', [ArticleController::class, 'index'])->name('catalog');

// Article page
Route::get('/articles/{article:slug}', [ArticleController::class, 'show'])
    ->whereAlpha('slug')
    ->name('articles.view')
    ->missing(function () {
        return Redirect::route('catalog');
    });

// Articles by tag
Route::get('/tags/{tag:url}', [TagController::class, 'showArticles'])
    ->whereAlpha('url')
    ->name('tags.articles')
    ->missing(function () {
        return Redirect::route('home');
    });
