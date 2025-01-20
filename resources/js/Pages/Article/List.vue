<script setup>
import { Head } from '@inertiajs/vue3';
import LinkArticle from '@/js/Components/LinkArticle.vue';

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

    <Head title="Lista"></Head>

    <div class="container py-3">
        <div class="my-5" v-for="article in ArrayLinkArticle.slice(0, 5)" :key="article.id">
            <LinkArticle :image="article.image" :title="article.title" :description="article.description"></LinkArticle>
        </div>
    </div>
</template>
