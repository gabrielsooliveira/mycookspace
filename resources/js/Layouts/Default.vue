<script setup>
import MainNavbarVue from '@/js/Components/MainNavbar.vue';
</script>

<template>
    <main class="bg-light bg-gradient min-vh-100">
        <MainNavbarVue></MainNavbarVue>
        <slot></slot>
    </main>
</template>
