<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <div class="mb-4">
        <Link class="mr-2" :href="route('posts.index')" :class="{ 'font-bold underline': route().current('posts.index') }">Posts</Link>
        <Link :href="route('about')" :class="{ 'underline': route().current('about') }">About</Link>
    </div>

    <slot />
</template>
