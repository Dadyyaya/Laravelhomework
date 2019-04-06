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
        $posts = \App\Post::paginate(5);

            return view('welcome', [
                'posts' => $posts
                ]);
    }

    public function getPostById($id)
    {
        $post = \App\Post::with('comment')
                         ->where('id', $id)
                         ->first();

            return view('post', [
                'post' => $post
            ]);
    }

    public function store(Request $request)
    {
        $this->Validate($request, [
            'content' => 'required'
        ]);

        $post = \App\Post::with('comment')
                         ->where('id', $request->id)
                         ->first();

        $post->comment()->create([
            'post_id' => $request->id,
            'content' => $request->get('content'),
        ]);

        return redirect()->to(route('post.index', ['id' => $request->get('id')]));
    }

    public function create()
    {
        return view('create');
    }

    public function comment()
    {
        return view('comment');
    }
}
