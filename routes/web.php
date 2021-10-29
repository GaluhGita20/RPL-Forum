<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForumController;

Route::prefix('')->group(function(){
    Route::get('/', [UserController::class,'view_home'])->name('home');
    Route::get('/login', [UserController::class,'view_login'])->name('login');
    Route::get('/forum', [ForumController::class,'view_forum'])->name('mainForum');
    Route::get('/forum/{slug}', [ForumController::class,'view_listTopic'])->name('listTopic');
    Route::get('/{slug}/create-topic', [ForumController::class,'create_topic'])->name('createTopic');
    Route::post('/forum/saveNewTopic', [ForumController::class,'saveNewTopic'])->name('saveNewTopic');
    Route::get('/forum/diskusi-topik', [UserController::class,'view_diskusiTopic'])->name('diskusiTopic');
});