<script setup>
import { Head } from '@inertiajs/vue3';
import CardImage from '@/js/Components/CardImage.vue';

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
</script>

<template>
    <Head title="Home"></Head>

    <div class="container">
        <section class="mt-4">
            <div class="row">
                <!-- Coluna Principal -->
                <div class="col-lg-8">
                    <div class="mb-4">
                        <CardImage :image="ArrayImages[0].image" :title="ArrayImages[0].title" :description="ArrayImages[0].description" />
                    </div>
                    <div class="row g-3">
                        <div v-for="image in ArrayImages.slice(1, 4)" :key="image.id" class="col-12 col-md-4 mb-4">
                            <CardImage :image="image.image" :title="image.title" :description="image.description" />
                        </div>
                    </div>
                </div>

                <!-- Coluna Secundária -->
                <div class="col-lg-4 col-12 d-lg-flex d-xl-block gap-3 gap-xl-0">
                    <div v-for="image in ArrayImages.slice(4)" :key="image.id" class="mb-4">
                        <CardImage :image="image.image" :title="image.title" :description="image.description" />
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-4">
            <h2 class="text-uppercase fw-bold">Últimas Postagens <span class="text-primary fs-1">.</span></h2>
            <div class="row">
                <div class="col-md-6 col-lg-8">
                    <div class="mb-4" v-for="index in 3" :key="index">
                        <a class="text-decoration-none text-dark" href="">
                            <div class="row">
                                <div class="col-lg-5">
                                    <img class="rounded-3 img-fluid" src="https://dummyimage.com/345x259/cfcfcf/030203" alt="">
                                </div>
                                <div class="col-lg-7">
                                    <span class="badge text-bg-danger my-2">Frutas</span>
                                    <h3 class="text-primary">The pros and cons of business agency</h3>
                                    <p>Pleasure and so read the was hope entire first decided the so must have as on was want up of I will rival in came this touched got a physics to travelling so all especially refinement monstrous desk they was arrange.</p>
                                    <span class="nav-item">Jan 22, 2022</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
