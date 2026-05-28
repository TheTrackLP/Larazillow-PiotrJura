<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";
defineProps(["message"]);
const name = ref("Emman");
const counter = ref(0);
setInterval(() => counter.value++, 1000);
</script>

<template>
    <header>
        <title>asdad</title>
    </header>
    <main>
        <h2>My name is: {{ name }}</h2>
        <p>Counter: {{ counter }}</p>
        <Link href="/show">Show Page</Link>
d    </main>
</template>
