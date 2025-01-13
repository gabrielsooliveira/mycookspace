<script setup>
import { Head, Link } from '@inertiajs/vue3';

// Array de imagens com title e description
const ArrayImages = [
    {
        id: 0,
        image: "https://dummyimage.com/1280x720/cfcfcf/030203",
        title: "Imagem Principal",
        description: "Descrição da imagem principal.",
    },
    {
        id: 1,
        image: "https://dummyimage.com/300x380/cfcfcf/030203",
        title: "Imagem Lateral 1",
        description: "Descrição da primeira imagem lateral.",
    }
];
</script>

<template>
    <Head title="Explorar"></Head>

    <div class="container">
        <h2 class="text-uppercase fw-bold"><span class="text-primary fs-1">.</span> Explorar</h2>
        <div class="row">
            <div class="col-lg-3 col-sm-6 my-1" v-for="index in 8" :key="index">
                <Link :href="route('home')">
                    <img src="https://dummyimage.com/380x380/cfcfcf/030203" class="img-fluid" alt="Imagem Natural">
                </Link>
            </div>
        </div>
    </div>
</template>
