<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ArticleController;

use Illuminate\Support\Facades\Route;

Route::post('/articles/{id}/comments/', [CommentController::class, 'store'])->name('create_article_comment');

Route::get('/articles', [ArticleController::class, 'index'])->name('all_articles');

Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('specific_article');

Route::post('/articles', [ArticleController::class, 'store'])->name('create_article');
