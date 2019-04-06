<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    protected $fillable = [
        'title',
        'content',
    ];

    public function comment()
    {
        return $this->hasMany('App\Comment');
    }
}
