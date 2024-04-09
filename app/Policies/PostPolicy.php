<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->permissions['posts_view'];
    }

    public function create(User $user): bool
    {
        return $user->permissions['posts_manage'];
    }
}
