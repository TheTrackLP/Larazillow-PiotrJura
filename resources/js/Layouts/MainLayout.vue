<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { ref, computed } from "vue";
// const timer = ref(0);
// setInterval(() => timer.value++, 1000);
const page = usePage();
const flashSuccess = computed(() => page.props.flash?.success);

// Computed Properties, makes it possible to create a variable that is automatically updated when the value of another variable changes
const x = ref(0);
const y = computed(() => x.value * 2);
</script>

<template>
    <Link href="/listing">Listing</Link>
    <Link href="/listing/create">New Listing</Link>
    <!-- 
    <div>Timer = {{ timer }}</div> -->
    <div v-if="flashSuccess" class="success">
        {{ flashSuccess }}
    </div>

    <!-- Computed Properties -->
    <div>
        {{ y }}
    </div>

    <slot></slot>
</template>

<style scoped>
.success {
    background-color: green;
    color: white;
}
</style>
