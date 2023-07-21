<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import InputError from '@/Components/InputError.vue';
import TextArea from '@/Components/TextArea.vue';
import { computed } from 'vue';


const props = defineProps({
    post: {
        type: Object,
        default: () => ({}),
    },
    readonly: {
        type: Boolean,
        default: false,
    }
});

const form = useForm("createPost", {
    id: props.post.id ?? 0,
    title: props.post.title ?? '',
    content: props.post.content ?? '',
});

const submit = () => {
    if (form.id === 0) {
        delete form.id
        form.post(route("posts.store"), {
            onSuccess: () => form.reset(),
        });
    }
    else {
        form.put(route("posts.update", props.post.id));
    }
};

const buttonLabel = computed(() => {
    return form.id === 0 ? 'create' : 'update'
})
</script>

<template>
    <form @submit.prevent="submit">
        <div>
            <InputLabel for="title" value="Title" />
            <TextInput id="title" v-model="form.title" type="text" class="mt-1 block w-full" required autocomplete="title"
                placeholder="Add the title" :disabled="readonly" />
            <InputError class="mt-2" :message="form.errors.title" />
        </div>

        <div class="mt-4">
            <InputLabel for="content" value="Content" />
            <TextArea id="content" v-model="form.content" type="text" class="mt-1 block w-full" required
                autocomplete="content" placeholder="Leave the message.." :disabled="readonly" />
            <InputError class="mt-2" :message="form.errors.content" />
        </div>

        <PrimaryButton v-if="!readonly" class="mt-6" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
            {{ buttonLabel }}
        </PrimaryButton>

    </form>
</template>

<!-- <script setup>
import { computed, useSlots } from 'vue';
import SectionTitle from './SectionTitle.vue';

defineEmits(['submitted']);

const hasActions = computed(() => !!useSlots().actions);
</script>

<template>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form @submit.prevent="$emit('submitted')">
                <div class="px-4 py-5 bg-white sm:p-6 shadow"
                    :class="hasActions ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md'">
                    <div class="grid grid-cols-6 gap-6">
                        <slot name="form" />
                    </div>
                </div>

                <div v-if="hasActions"
                    class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    <slot name="actions" />
                </div>
            </form>
        </div>
    </div>
</template> -->
