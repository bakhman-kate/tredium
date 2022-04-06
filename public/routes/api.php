<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{ArticleController, CommentController};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Создание комментария к статье
Route::post('/comments', [CommentController::class, 'store']);

// Инкрементирование счетчика лайков статьи
Route::put('/articles/{id}/increment-likes', [ArticleController::class, 'incrementLikes']);

// Инкрементирование счетчика просмотров статьи
Route::put('/articles/{id}/increment-views', [ArticleController::class, 'incrementViews']);
