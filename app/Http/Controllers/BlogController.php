<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function getSinglePost(Post $post){

//             $tags =Tag::all();
        return view('homepage.pages.singlepage')->with([
            'post'=> $post,
//            'tags'=> $tags
        ]);
    }
}
