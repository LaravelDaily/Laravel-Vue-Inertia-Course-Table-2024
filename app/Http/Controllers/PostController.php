<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Resources\PostResource;
use Illuminate\Http\Resources\Json\JsonResource;

class PostController extends Controller
{
    public function index(): JsonResource
    {
        return PostResource::collection(Post::all());
    }
}
