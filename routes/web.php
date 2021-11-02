<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\RegisterController;

Route::prefix('')->group(function(){
    Route::get('/', [UserController::class,'view_home'])->name('home');
    Route::get('/login', [RegisterController::class,'index'])->name('login');
    Route::get('/register', [RegisterController::class,'register'])->name('register');
    Route::get('/getdatalogin', [RegisterController::class,'get_data_register'])->name('datalogin');

    //Forum
    Route::get('/forum', [ForumController::class,'view_forum'])->name('mainForum');
    Route::get('/forum/{slug}', [ForumController::class,'view_listTopic'])->name('listTopic');
    Route::get('/{slug}/create-topic', [ForumController::class,'create_topic'])->name('createTopic');
    Route::post('/forum/saveNewTopic', [ForumController::class,'saveNewTopic'])->name('saveNewTopic');
    // Route::get('/forum/diskusi-topik', [UserController::class,'view_diskusiTopic'])->name('diskusiTopic');
    Route::get('/diskusi-topik', [UserController::class,'view_diskusiTopic'])->name('diskusiTopic');

    //User
    Route::get('/profile-user', [UserController::class,'view_profileUser'])->name('profileUser');
    Route::get('/history', [UserController::class,'view_history'])->name('history');

    //Top Topics
    Route::get('/top-topics', [UserController::class,'view_topTopics'])->name('topTopics');



});