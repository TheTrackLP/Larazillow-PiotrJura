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
        <div>
            <Link :href="`/listing/${listing.id}`">
                <ListingAddress :listing="listing" />
            </Link>
        </div>
        <div>
            <Link :href="`/listing/${listing.id}/edit`">Edit</Link>
        </div>
        <div>
            <Link :href="`/listing/${listing.id}`" method="delete">
                Delete
            </Link>
        </div>
    </div>
</template>
