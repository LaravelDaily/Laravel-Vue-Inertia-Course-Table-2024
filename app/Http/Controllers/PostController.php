<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function index(): Response
    {
        Gate::authorize('viewAny', Post::class);

        $posts = PostResource::collection(Post::all());

        return Inertia::render('Posts/Index', compact('posts'));
    }

    public function create(): Response
    {
        Gate::authorize('create', Post::class);

        return Inertia::render('Posts/Create');
    }

    public function store(StorePostRequest $request): RedirectResponse
    {
        Gate::authorize('create', Post::class);

        Post::create($request->validated());

        return redirect()->route('posts.index')
            ->with('message', 'Post created successfully.');
    }

    public function edit(Post $post)
    {
        Gate::authorize('create', Post::class);

        return Inertia::render('Posts/Edit', compact('post'));
    }

    public function update(Post $post, StorePostRequest $request)
    {
        Gate::authorize('create', Post::class);

        $post->update($request->validated());

        return redirect()->route('posts.index')
            ->with('message', 'Post updated successfully');
    }

    public function destroy(Post $post)
    {
        Gate::authorize('create', Post::class);

        $post->delete();

        return redirect()->route('posts.index')
            ->with('message', 'Post deleted successfully');
    }
}
