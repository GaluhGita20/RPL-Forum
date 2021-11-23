<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/logout', function () {
//     return view('pages.home')->name('logout');
// });

Route::group(['middleware'=>'auth'], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Route::get('/user/create', [App\Http\Controllers\HomeController::class, 'add_user'])->name('add_user');

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

Auth::routes();