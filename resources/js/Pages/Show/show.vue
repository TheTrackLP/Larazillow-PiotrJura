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
