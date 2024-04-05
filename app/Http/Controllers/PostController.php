<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    public function index(): Response
    {
        $posts = PostResource::collection(Post::all());

        return Inertia::render('Posts/Index', compact('posts'));
    }
}
