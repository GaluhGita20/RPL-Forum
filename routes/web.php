<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoomDiskusiController;

Route::get('/view-login', function () {
    return view('auth.login')->name('view-login');
});

Route::group(['middleware'=>'auth'], function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    //Forum
    Route::get('/forum', [ForumController::class,'view_forum'])->name('mainForum');
    Route::get('/forum/{slug}', [ForumController::class,'view_listTopic'])->name('listTopic');
    Route::get('/{slug}/create-topic', [ForumController::class,'create_topic'])->name('createTopic');
    Route::post('/forum/saveNewTopic', [ForumController::class,'saveNewTopic'])->name('saveNewTopic');

    //User
    Route::get('/profile-user', [UserController::class,'view_profileUser'])->name('profileUser');
    Route::get('/history', [UserController::class,'view_history'])->name('history');

    //Top Topics
    Route::get('/top-topics', [ForumController::class,'view_topTopics'])->name('topTopics');


    //Diskusi Topik
    Route::get('/forum-diskusi/room={slug}', [RoomDiskusiController::class,'index'])->name('room_diskusi');
    Route::post('/post-diskusi', [RoomDiskusiController::class,'post_diskusi'])->name('post_diskusi');
});

Auth::routes();