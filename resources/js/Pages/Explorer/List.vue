<script setup>
import { Head, Link } from '@inertiajs/vue3';

</script>

<template>

    <Head title="Lista"></Head>

    <div class="container">
        <div class="my-5" v-for="index in 3" :key="index">
            <a class="text-decoration-none text-dark" href="">
                <div class="row">
                    <div class="col-lg-5">
                        <img class="rounded-3 img-fluid" src="https://dummyimage.com/345x259/cfcfcf/030203" alt="">
                    </div>
                    <div class="col-lg-7">
                        <span class="badge text-bg-danger my-2">Frutas</span>
                        <h3 class="text-primary">The pros and cons of business agency</h3>
                        <p>Pleasure and so read the was hope entire first decided the so must have as on was want up of
                            I will rival in came this touched got a physics to travelling so all especially refinement
                            monstrous desk they was arrange.</p>
                        <span class="nav-item">Jan 22, 2022</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</template>
