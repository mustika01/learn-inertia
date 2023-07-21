<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import TextArea from '@/Components/TextArea.vue';
import Form from '@/Pages/Admin/Posts/Form.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

// const form = useForm({
//     title: null,
//     content: null,
// });

// const submit = () => {
//     form.post(route("posts.store"));
// };

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

                <Form> </Form>

            </div>
        </div>
    </AppLayout>
</template>



<style></style>