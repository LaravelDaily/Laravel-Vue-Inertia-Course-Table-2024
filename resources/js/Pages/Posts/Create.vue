<script setup>
import AppLayout from '../../Layouts/App.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    title: '',
    content: ''
})
</script>

<template>
    <Head title="New Post" />

    <AppLayout>
        <form @submit.prevent="form.post(route('posts.store'))">
            <div>
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">
                        Title
                    </label>
                    <input v-model="form.title" type="text" id="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>

                <div class="mt-4">
                    <label for="content" class="block text-sm font-medium text-gray-700">
                        Content
                    </label>
                    <textarea v-model="form.content" id="content" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                </div>
            </div>

            <div class="py-4 space-x-2">
                <button type="submit" class="inline-block rounded-md bg-blue-500 px-4 py-3 text-xs font-semibold uppercase tracking-widest text-white shadow-sm">
                    Save post
                </button>
                <Link :href="route('posts.index')" class="inline-block rounded-md border border-gray-300 px-4 py-3 text-xs font-semibold uppercase tracking-widest shadow-sm">
                    Cancel
                </Link>
            </div>
        </form>
    </AppLayout>
</template>
