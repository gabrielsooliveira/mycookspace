<script setup>
import MainNavbarVue from '@/js/Components/MainNavbar.vue';
</script>

<template>
    <main class="bg-light bg-gradient">
        <MainNavbarVue></MainNavbarVue>
        <slot></slot>
    </main>
</template>
