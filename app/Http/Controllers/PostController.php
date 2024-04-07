<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    public function index(): Response
    {
//        sleep(3);

        $posts = PostResource::collection(Post::all());

        return Inertia::render('Posts/Index', compact('posts'));
    }

    public function create(): Response
    {
        return Inertia::render('Posts/Create');
    }

    public function store(Request $request): RedirectResponse
    {
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('posts.index');
    }
}
