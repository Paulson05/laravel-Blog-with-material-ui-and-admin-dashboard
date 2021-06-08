<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tag';
    protected $guarded = [];
    use HasFactory;

//    public function posts(){
//        return $this->belongsToMany(Post::class );
//    }
}
