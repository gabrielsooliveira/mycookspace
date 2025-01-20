<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    image: {
        type: String,
        required: true,
    },
    title: {
        type: String,
        required: true,
    },
    description: {
        type: String,
        required: true,
    },
    updatedAt: {
        type: String,
        default: null, // Valor opcional
    },
});
</script>

<template>
    <Link class="text-decoration-none text-dark" :href="route('article', title)">
        <div class="row">
            <div class="col-lg-4">
                <img class="rounded-3 img-fluid" :src="image" :alt="title">
            </div>
            <div class="col-lg-8">
                <span class="badge text-bg-danger my-2">Frutas</span>
                <h3 class="text-primary">{{ title }}</h3>
                <p>{{ description }}</p>
                <span class="nav-item">Jan 22, 2022</span>
            </div>
        </div>
    </Link>
</template>

<style scoped>
p{
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
}
</style>
