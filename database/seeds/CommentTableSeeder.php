<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = \App\Post::all();
        foreach ($posts as $post){
            factory(App\Comment::class)->create([
                'post_id' => $post->id,
            ]);
        }
    }
}
