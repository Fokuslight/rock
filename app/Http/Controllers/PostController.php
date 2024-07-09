<?php

namespace App\Http\Controllers;

use App\Http\Resources\Post\PostResource;
use App\Models\Post;
use Illuminate\Http\Response;

class PostController extends Controller
{
    public function store()
    {
        // обработка запроса
        // бизнес логика
        // возвращение ответа(формирование ответа)
        $data = $this->getData();
        $post = Post::create($data);
        return $post;
    }

    public function index()
    {
        return PostResource::collection(Post::all())->resolve();
    }

    public function show(Post $post)
    {
        return PostResource::make($post)->resolve();
    }

    public function update()
    {
        $post = Post::find(1);
        $post->update([
            'title' => 'title edited',
            'content' => 'content edited',
        ]);
        return $post;
    }

    public function destroy()
    {
        $post = Post::find(1);
        $post->delete();
        return Response::HTTP_NO_CONTENT;
    }

    private function getData()
    {
        return [
            'title' => 'title',
            'content' => 'content',
            'description' => 'desecition fdgdg',
            'image_path' => 'some path',
            'author' => 'Ivan',
            'category' => 'PHP',
            'tag' => 'Develop',
        ];
    }


}
