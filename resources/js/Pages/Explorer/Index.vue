<script setup>
import { Head, Link } from '@inertiajs/vue3';

// Array de imagens com title e description
const ArrayImages = [
    {
        id: 0,
        name: "Cafe da manha",
        image: "https://dummyimage.com/1280x720/cfcfcf/030203",
        title: "Imagem Principal",
        description: "Descrição da imagem principal.",
    },
    {
        id: 1,
        name: "Almoco",
        image: "https://dummyimage.com/300x380/cfcfcf/030203",
        title: "Imagem Lateral 1",
        description: "Descrição da primeira imagem lateral.",
    },
    {
        id: 2,
        name: "Brunch",
        image: "https://dummyimage.com/300x380/cfcfcf/030203",
        title: "Imagem Lateral 1",
        description: "Descrição da primeira imagem lateral.",
    },
    {
        id: 3,
        name: "Lanches",
        image: "https://dummyimage.com/300x380/cfcfcf/030203",
        title: "Imagem Lateral 1",
        description: "Descrição da primeira imagem lateral.",
    },
    {
        id: 4,
        name: "Ceia",
        image: "https://dummyimage.com/300x380/cfcfcf/030203",
        title: "Imagem Lateral 1",
        description: "Descrição da primeira imagem lateral.",
    },
    {
        id: 5,
        name: "Jantar",
        image: "https://dummyimage.com/300x380/cfcfcf/030203",
        title: "Imagem Lateral 1",
        description: "Descrição da primeira imagem lateral.",
    },
    {
        id: 6,
        name: "Sobremesas",
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
            <div class="col-lg-3 col-sm-6 my-1" v-for="meet in ArrayImages" :key="meet.id">
                <Link :href="route('explorer-list', meet.name)">
                    <img src="https://dummyimage.com/380x380/cfcfcf/030203" class="img-fluid" alt="Imagem Natural">
                </Link>
            </div>
        </div>
    </div>
</template>
