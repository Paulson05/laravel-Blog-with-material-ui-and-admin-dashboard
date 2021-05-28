<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $posts = Post::all();
    return view('index')->with([
        'posts' => $posts
    ]);
});

Route::get('admin', [AdminController::class, 'admin'])->name('admin');
Route::resource('post', PostController::class)->only(['index','store','show','update','destroy','edit',  ]);
Route::get('blog/{post:slug}', [BlogController::class, 'getSinglePost'])->name('getSinglePost')
    ->where('slug', '[\w\d\-\_]+');
