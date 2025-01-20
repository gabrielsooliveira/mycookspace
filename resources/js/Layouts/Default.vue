<script setup>
import MainNavbar from '@/js/Components/MainNavbar.vue';
import MainFooter from '@/js/Components/MainFooter.vue';
</script>

<template>
    <main class="bg-light bg-gradient min-vh-100">
        <MainNavbar></MainNavbar>
        <slot></slot>
        <MainFooter></MainFooter>
    </main>
</template>
