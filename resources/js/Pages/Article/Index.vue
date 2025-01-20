<script setup>
import { Head, Link } from '@inertiajs/vue3';

const product = {
    "id": 1,
    "images": [
        {
            "file_path": "https://www.youtube.com/embed/zpOULjyy-n8?rel=0",
            "name": "image1"
        },
        {
            "file_path": "https://www.easycodetools.com/dummy-img/600x400/000000/ffffff.png",
            "name": "image2"
        },
        {
            "file_path": "https://www.easycodetools.com/dummy-img/600x400/000000/ffffff.png",
            "name": "image3"
        },
        {
            "file_path": "https://www.easycodetools.com/dummy-img/600x400/000000/ffffff.png",
            "name": "image3"
        },
        {
            "file_path": "https://www.easycodetools.com/dummy-img/600x400/000000/ffffff.png",
            "name": "image3"
        },
        {
            "file_path": "https://www.easycodetools.com/dummy-img/600x400/000000/ffffff.png",
            "name": "image3"
        }
    ]
}
</script>

<template>

    <Head title="Alimento"></Head>

    <main class="container mt-3">
        <div>
            <img src="https://dummyimage.com/2000x300/cfcfcf/fff&text=Propaganda" class="img-fluid">
        </div>
        <div class="row mt-3 g-5">
            <div class="col-md-8">
                <h1>Bolo de cenoura</h1>
                <div class="row gy-2">
                    <div class="col-lg-4">
                        <span>85% de aprovação</span>
                    </div>
                    <div class="col-lg-4">
                        Comente esta receita
                    </div>
                    <div class="col-lg-4">
                        <button type="button" class="btn btn-primary btn-sm rounded-pill text-white fw-semibold p-2"><font-awesome-icon icon="fa-solid fa-star" /> Avalie a receita</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-stick" style="top: 2rem;">
                    <div class="mb-3 bg-light rounded">
                        <img src="https://dummyimage.com/600x180/cfcfcf/fff&text=Propaganda" class="img-fluid">
                    </div>

                    <div>
                        <h4 class="fst-italic">Outras Receitas</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                    <img src="https://dummyimage.com/300x300/cfcfcf/030203" class="bd-placeholder-img" height="96" alt="">
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">Example blog post title</h6>
                                        <small class="text-body-secondary">January 15, 2024</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                    <img src="https://dummyimage.com/300x300/cfcfcf/030203" class="bd-placeholder-img" height="96" alt="">
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">This is another blog post title</h6>
                                        <small class="text-body-secondary">January 14, 2024</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                    <img src="https://dummyimage.com/300x300/cfcfcf/030203" class="bd-placeholder-img" height="96" alt="">
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">Longer blog post title: This one has multiple lines!</h6>
                                        <small class="text-body-secondary">January 13, 2024</small>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>
