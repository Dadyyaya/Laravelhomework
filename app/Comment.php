<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';

    protected $fillable = [
        'id',
        'content',
    ];

    public function post()
    {
        return $this->belongsTo('App\Post', 'id');
    }
}
