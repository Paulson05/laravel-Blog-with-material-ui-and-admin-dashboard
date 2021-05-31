<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];
    protected $table = 'comments';
    use HasFactory;

    public  function posts(){
        return $this->belongsTo(Post::class);
    }
}
