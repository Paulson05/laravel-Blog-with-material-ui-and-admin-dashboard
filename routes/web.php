<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Models\Category;
use App\Models\Post;

use App\Models\Tag;
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
    $post4 = Post::orderBy('created_at', 'asc')->limit(3)->get();


    $tags = Tag::all();
    $categories = Category::all();
    return view('homepage.pages.index')->with([
        'posts' => $posts,
        'post4' => $post4,
        'tags' => $tags,
        'categories' => $categories,

    ]);
});

Route::get('admin', [AdminController::class, 'admin'])->name('admin');
Route::resource('post', PostController::class)->only(['index','store','show','update','destroy','edit', 'create'  ]);
Route::resource('category', CategoriesController::class)->only(['index','store','show','update','destroy','edit',  ]);
Route::resource('tag', TagController::class)->only(['index','store','show','update','destroy','edit',  ]);
Route::resource('comments', CommentController::class)->only(['index','store','show','update','destroy','edit',  ]);

Route::get('categorypost/{id}', [CategoriesController::class, 'categorypost'] )->name('categorypost');
Route::get('blog/{post:slug}', [BlogController::class, 'getSinglePost'])->name('getSinglePost')
    ->where('slug', '[\w\d\-\_]+');
