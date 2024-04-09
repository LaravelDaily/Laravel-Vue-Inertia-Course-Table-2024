<script setup>
import AppLayout from '../../Layouts/App.vue';
import { Head, Link, router } from '@inertiajs/vue3';

const props = defineProps({
    posts: {
        type: Object,
        required: true
    }
})

const destroy = (id) => {
    if (confirm('Are you sure?')) {
        router.delete(route('posts.destroy', id))
    }
}
</script>

<template>
    <Head title="Posts" />

    <AppLayout>
        <Link :href="route('posts.create')" class="mb-4 inline-block rounded-md bg-blue-500 px-4 py-3 text-xs font-semibold uppercase tracking-widest text-white shadow-sm">
            Add new post
        </Link>

        <table class="min-w-full border divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="bg-gray-50 px-6 py-3 text-left">
                        <span class="text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">ID</span>
                    </th>
                    <th class="bg-gray-50 px-6 py-3 text-left">
                        <span class="text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">Title</span>
                    </th>
                    <th class="bg-gray-50 px-6 py-3 text-left">
                        <span class="text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">Content</span>
                    </th>
                    <th class="bg-gray-50 px-6 py-3 text-left">
                        <span class="text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">Created At</span>
                    </th>
                    <th class="bg-gray-50 px-6 py-3 text-left"></th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                <tr v-for="post in posts.data">
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                        {{ post.id }}
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                        {{ post.title }}
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                        {{ post.content }}
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                        {{ post.created_at }}
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                        <Link :href="route('posts.edit', post.id)" class="mr-2 inline-block rounded-md bg-blue-500 px-3 py-2 text-xs font-semibold uppercase tracking-widest text-white shadow-sm">
                            Edit
                        </Link>
                        <button @click="destroy(post.id)" type="button" class="rounded-md bg-red-600 px-3 py-2 text-xs font-semibold uppercase tracking-widest text-white shadow-sm">
                            Delete
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </AppLayout>
</template>
