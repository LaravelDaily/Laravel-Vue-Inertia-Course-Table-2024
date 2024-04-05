<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="mb-4">
        <Link class="mr-2" :href="route('posts.index')">Posts</Link>
        <Link :href="route('about')">About</Link>
    </div>

    <div>About us</div>
</template>
