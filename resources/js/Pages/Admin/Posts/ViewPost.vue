<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Form from '@/Pages/Admin/Posts/Form.vue';

defineProps({
    post: {
        type: Object,
        default: () => ({}),
    },
});



</script>

<template>
    <AppLayout title="Posts">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Posts
            </h2>
        </template>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mt-8">

                <Form :post="post" readonly></Form>

            </div>
        </div>
    </AppLayout>
</template>
