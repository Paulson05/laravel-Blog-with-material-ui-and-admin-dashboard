<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
protected $guarded = [];
protected $table = 'post';

    public  function category(){
        return $this->belongsTo(Category::class);
    }
    public  function tags(){
        return $this->belongsToMany(Tag::class,'post_tag','post_id','tag_id');
    }
    public  function comments(){
        return $this->hasMany(Comment::class);
    }


}
