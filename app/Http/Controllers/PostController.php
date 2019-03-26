<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        
    }

    public function post()
    {
        $posts = \App\Post::all();

        foreach ($posts as $post) {
            echo $post;
        }
    }

    public function getPostById($id)
    {
        $post = \App\Post::with('comment')
                         ->where('id', $id)
                         ->first();

        echo $post;
    }

    public function create()
    {
        
    }

    public function comment()
    {
        
    }
}
