<script setup>
defineProps({
    listing: Object,
});
</script>

<template>
    <div>
        <!-- Create a component IF the data will be shown or use a form on REPEAT-->
        <ListingAddress :listing="listing" />
    </div>
</template>
<script>
import MainLayout from "@/Layouts/MainLayout.vue";
import ListingAddress from "@/Components/ListingAddress.vue";
export default {
    layout: MainLayout,
};
</script>
