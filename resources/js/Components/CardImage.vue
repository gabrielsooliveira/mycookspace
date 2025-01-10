<script setup>
import { Link } from '@inertiajs/vue3';

// Propriedades recebidas pelo componente
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
    <div class="card bg-dark shadow-lg h-100 border-0">
        <!-- Link para navegação -->
        <Link :href="route('home')">
            <!-- Imagem do Card -->
            <img class="card-img-top" :src="image" :alt="title">
            <!-- Conteúdo sobreposto -->
            <div class="card-img-overlay text-white d-flex flex-column justify-content-end">
                <h5 class="card-title">{{ title }}</h5>
                <p class="card-text">{{ description }}</p>
                <p v-if="updatedAt" class="card-text"><small>Última atualização {{ updatedAt }}</small></p>
            </div>
        </Link>
    </div>
</template>

