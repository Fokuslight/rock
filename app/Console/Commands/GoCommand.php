<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Tag;
use App\Models\User;
use Dflydev\DotAccessData\Data;
use Illuminate\Console\Command;

class GoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'go';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

//        0 => 5
//    1 => 7
//    2 => 10
//    3 => 11
//    4 => 13

        $post = Post::first();
        // attach - добавление
        // syncWithoutDetaching
        // sync
        // detach
        // toggle
        // updateExistingPivot
        $tag = Tag::find(10);
        $post->tags()->updateExistingPivot($tag, [
            'status' => 2,
        ]);
        dd($post->tags->count());
    }
}
