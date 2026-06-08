<script setup>
defineProps({
    listing: Object,
});
</script>
<template>
    <div>{{ listing.street }} {{ listing.price }} {{ listing.city }}</div>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
    layout: MainLayout,
};
</script>
