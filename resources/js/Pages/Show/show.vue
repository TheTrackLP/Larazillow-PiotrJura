<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";
defineProps({
    message: String,
    numberPhone: Number,
});
const count = ref(0);
setInterval(() => count.value++, 1000);
</script>
<template>
    <h1>Show</h1>
    <h3>Counter: {{ count }}</h3>
    <Link href="/">Main Page</Link>
    <div>The message: {{ message }}</div>
    <div>The phone number: {{ numberPhone }}</div>
</template>

<!-- This method makes a persistent layout that you dont want to lose your data without refreshing-->
<script>
import MainLayout from "../Layouts/MainLayout.vue";

export default {
    layout: MainLayout,
};
</script>
