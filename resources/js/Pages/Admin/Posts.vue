<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';

const props = defineProps({
    posts: {
        type: Object,
        default: () => ({}),
    },
});

const form = useForm({});

function destroy(id) {
    if (confirm("Are you sure you want to Delete")) {
        form.delete(route('posts.destroy', id));
    }
}
</script>


<template>
    <AppLayout title="Posts" class="">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Posts
            </h2>
        </template>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mt-10">
                <div class="flex justify-end mb-5">
                    <Link :href="route('posts.create')">
                    <PrimaryButton @click="create = !create" class="mb-4" :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing">
                        Create
                    </PrimaryButton>
                    </Link>
                </div>

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-center text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-500 dark:text-gray-300">
                            <tr>
                                <th scope="col" class="px-1 py-3">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Title
                                </th>
                                <th scope="col" class="px- py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(post, index) in posts" :key="post.id" class="bg-white border-b dark:bg-gray-700 ">
                                <th scope="row"
                                    class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-200">
                                    {{ index + 1 }}
                                </th>
                                <td class="px-6 py-4 dark:text-gray-300">
                                    {{ post.title }}
                                </td>
                                <td class="py-4">
                                    <Link :href="route('posts.show', post.id)" class="text-slate-600 mr-5 dark:text-white">
                                    View
                                    </Link>

                                    <Link :href="route('posts.edit', post.id)" class="text-blue-500 mr-5">
                                    Edit
                                    </Link>

                                    <Link @click="destroy(post.id)" class="text-red-500">
                                    Delete
                                    </Link>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </AppLayout>
</template>

<style></style>