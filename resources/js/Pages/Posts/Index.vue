<script setup>
const props = defineProps({
    posts: {
        type: Object,
        required: true
    }
})
</script>

<template>
    <table class="min-w-full divide-y divide-gray-200 border">
        <thead>
            <tr>
                <th class="px-6 py-3 bg-gray-50 text-left">
                    <div class="flex flex-row items-center justify-between cursor-pointer">
                        <div class="leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            ID
                        </div>
                    </div>
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left">
                    <div class="flex flex-row items-center justify-between cursor-pointer">
                        <div class="leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Title
                        </div>
                    </div>
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Content</span>
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Created At</span>
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200 divide-solid">
            <tr v-for="post in posts">
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    {{ post.id }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    {{ post.title }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    {{ post.content }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    {{ post.created_at }}
                </td>
            </tr>
        </tbody>
    </table>
</template>
