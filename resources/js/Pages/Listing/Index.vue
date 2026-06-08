<script setup>
import { Link } from "@inertiajs/vue3";
defineProps({
    listings: Array,
});
</script>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";
import ListingAddress from "@/Components/ListingAddress.vue";

export default {
    layout: MainLayout,
};
</script>
<template>
    <div v-for="listing in listings" :key="listing.id">
        <Link :href="`/listing/${listing.id}`">
            <ListingAddress :listing="listing" />
        </Link>
    </div>
</template>
