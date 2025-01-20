<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="alert alert-dark alert-dismissible fade show rounded-0 py-2 d-flex align-items-center shadow-lg" role="alert">
        <span class="fw-8"><strong>Última chance!</strong> Garanta já o seu ebook e leve conhecimento de qualidade para transformar sua vida!</span>
        <button class="btn btn-sm btn-primary fw-semibold mx-2">Confira!</button>
        <button type="button" class="ms-auto btn" data-bs-dismiss="alert" aria-label="Close"><font-awesome-icon icon="fa-solid fa-xmark"/></button>
    </div>

    <nav class="navbar navbar-expand-lg mt-2" aria-label="Ninth navbar example">
        <div class="container-xl">
            <a class="navbar-brand fw-bold" href="#">My<span class="text-primary">Healthy</span>Food</a>

            <button class="nav-link link-secondary d-lg-none d-block" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-label="botão de menu">
                <font-awesome-icon :icon="['fas', 'bars']" size="lg"/>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample07XL">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <Link class="nav-link" aria-current="page" :href="route('home')" :class="{ 'active': $page.url === '/' }" aria-label="home">Inicio</Link>
                    </li>
                    <li class="nav-item">
                        <Link class="nav-link" aria-current="page" :href="route('explorer')" :class="{ 'active': $page.url === '/explorar' }" aria-label="explorer">Explorar</Link>
                    </li>
                </ul>

                <form class="me-2">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Procurar uma receita..." aria-label="Search">
                        <button class="btn btn-secondary py-2 px-2 fs-7" type="submit"><font-awesome-icon icon="fa-solid fa-magnifying-glass" /></button>
                    </div>
                </form>

                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link link-primary" aria-current="page" href="#">
                            <font-awesome-icon icon="fa-brands fa-square-facebook" />
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-primary" aria-current="page" href="#">
                            <font-awesome-icon icon="fa-brands fa-instagram" />
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-primary" aria-current="page" href="#">
                            <font-awesome-icon icon="fa-brands fa-tiktok" />
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-primary" aria-current="page" href="#">
                            <font-awesome-icon icon="fa-brands fa-youtube" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>
