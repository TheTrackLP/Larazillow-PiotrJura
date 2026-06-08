<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";
defineProps(["message"]);
const name = ref("Emman");
</script>

<template>
    <h2>My name is: {{ name }}</h2>
    <Link href="/show">Show Page</Link>
    <Link href="/listing/create">Add Form</Link>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
    layout: MainLayout,
};
</script>
