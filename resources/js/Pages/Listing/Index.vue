<script setup>
import { Link } from "@inertiajs/vue3";
defineProps({
    listings: Array,
});
</script>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
    layout: MainLayout,
};
</script>
<template>
    <div v-for="listing in listings" :key="listing.id">
        <Link :href="`/listing/${listing.id}`">
            {{ listing.street }}, {{ listing.street_nr }}, {{ listing.city }},
            for ${{ listing.price }}</Link
        >
    </div>
</template>
