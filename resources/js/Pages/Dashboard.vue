<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
</script>

<template>
    <AppLayout title="Dashboard" class="dark">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- <div class="bg-white overflow-hidden sm:rounded-lg"> -->
                <!-- <Welcome /> -->
                <div class="">
                    <h1 class="text-9xl text-center font-bold dark:bg-slate-800 dark:text-white">Welcome
                    </h1>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </AppLayout>
</template>
