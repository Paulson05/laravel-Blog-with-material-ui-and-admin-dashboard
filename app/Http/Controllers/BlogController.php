<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function getSinglePost(Post $post,  Tag $tags){
//            $post = Post::all();
//             $tags =Tag::all();
        return view('homepage.pages.singlepage')->with([
            'post'=> $post,
            'tags'=> $tags
        ]);
    }
}
