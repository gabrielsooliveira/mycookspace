<script setup>
import { Head } from '@inertiajs/vue3';
import CardImage from '@/js/Components/CardImage.vue';
import LinkArticle from '@/js/Components/LinkArticle.vue';

// Array CardImages
const ArrayCardImage = [
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
    },
    {
        id: 2,
        image: "https://dummyimage.com/300x380/cfcfcf/030203",
        title: "Imagem Lateral 2",
        description: "Descrição da segunda imagem lateral.",
    },
    {
        id: 3,
        image: "https://dummyimage.com/300x380/cfcfcf/030203",
        title: "Imagem Lateral 3",
        description: "Descrição da terceira imagem lateral.",
    },
    {
        id: 4,
        image: "https://dummyimage.com/560x560/cfcfcf/030203",
        title: "Imagem Extra 1",
        description: "Descrição da primeira imagem extra.",
    },
    {
        id: 5,
        image: "https://dummyimage.com/560x560/cfcfcf/030203",
        title: "Imagem Extra 2",
        description: "Descrição da segunda imagem extra.",
    },
];

const ArrayLinkArticle = [
    {
        id: 0,
        image: "https://dummyimage.com/345x259/cfcfcf/030203",
        title: "Imagem Artigo 1",
        description: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
    },
    {
        id: 1,
        image: "https://dummyimage.com/345x259/cfcfcf/030203",
        title: "Imagem Artigo 2",
        description: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
    },
    {
        id: 2,
        image: "https://dummyimage.com/345x259/cfcfcf/030203",
        title: "Imagem Artigo 3",
        description: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
    },
    {
        id: 3,
        image: "https://dummyimage.com/345x259/cfcfcf/030203",
        title: "Imagem Artigo 4",
        description: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
    },
    {
        id: 4,
        image: "https://dummyimage.com/345x259/cfcfcf/030203",
        title: "Imagem Artigo 5",
        description: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
    },
];
</script>

<template>
    <Head title="Home"></Head>

    <div class="container">
        <section class="mt-4">
            <div class="row">
                <!-- Coluna Principal -->
                <div class="col-lg-8">
                    <div class="mb-4">
                        <CardImage :image="ArrayCardImage[0].image" :title="ArrayCardImage[0].title" :description="ArrayCardImage[0].description" />
                    </div>
                    <div class="row g-3">
                        <div v-for="image in ArrayCardImage.slice(1, 4)" :key="image.id" class="col-12 col-md-4 mb-4">
                            <CardImage :image="image.image" :title="image.title" :description="image.description" />
                        </div>
                    </div>
                </div>

                <!-- Coluna Secundária -->
                <div class="col-lg-4 col-12 d-lg-flex d-xl-block gap-3 gap-xl-0">
                    <div v-for="image in ArrayCardImage.slice(4)" :key="image.id" class="mb-4">
                        <CardImage :image="image.image" :title="image.title" :description="image.description" />
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-4">
            <h2 class="text-uppercase fw-bold">Últimas Postagens <span class="text-primary fs-1">.</span></h2>
            <div class="row">
                <div class="col-md-6 col-lg-8">
                    <div class="mb-4" v-for="article in ArrayLinkArticle.slice(0, 4)" :key="article.id">
                        <LinkArticle :image="article.image" :title="article.title" :description="article.description"></LinkArticle>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
