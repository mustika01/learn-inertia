<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link, useForm } from '@inertiajs/vue3';

const props = defineProps({
    users: {
        type: Object,
        default: () => ({}),
    },
});

const form = useForm({});

function destroy(id) {
    if (confirm("Are you sure you want to Delete")) {
        form.delete(route('roles.destroy', id));
    }
}
</script>

<template>
    <AppLayout title="Roles" class="">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Roles
            </h2>
        </template>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mt-8">
                <!-- <Link :href="route('posts.create')">
                <PrimaryButton class="mb-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Create
                </PrimaryButton>
                </Link> -->

                <div class="relative overflow-x-auto">
                    <table class="mt-8 w-full text-sm text-center text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-500 dark:text-gray-300">
                            <tr>
                                <th scope="col" class="px-1 py-3">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Role
                                </th>
                                <th scope="col" class="px- py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(user, index) in users" :key="user.id" class="bg-white border-b dark:bg-gray-700">
                                <th scope="row"
                                    class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-200">
                                    {{ index + 1 }}
                                </th>
                                <td class="px-6 py-4 dark:text-gray-200">
                                    {{ user.name }}
                                </td>
                                <td class="px-6 py-4 dark:text-gray-200">
                                    {{ user.email }}
                                </td>
                                <td class="px-6 py-4 dark:text-gray-200">
                                    {{ user.roles[0].label }}
                                </td>
                                <td class="py-4">
                                    <Link :href="route('roles.edit', user.id)" class="text-green-500 mx-5">
                                    Edit
                                    </Link>

                                    <Link @click="destroy(role.id)" class="text-red-500">
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