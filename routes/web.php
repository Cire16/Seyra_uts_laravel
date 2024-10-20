<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::resource('articles', ArticleController::class);

Route::get('/', function () {
    return redirect()->route('articles.index');
});
