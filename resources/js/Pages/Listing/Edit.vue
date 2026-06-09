<script setup>
import { useForm } from "@inertiajs/vue3";

const props = defineProps({
    listing: Object,
});

const form = useForm({
    beds: props.listing.beds,
    baths: props.listing.baths,
    area: props.listing.area,
    city: props.listing.city,
    street: props.listing.street,
    code: props.listing.code,
    street_nr: props.listing.street_nr,
    price: props.listing.price,
});

const update = () => form.put(`/listing/${props.listing.id}`);
</script>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
    layout: MainLayout,
};
</script>

<template>
    <form @submit.prevent="update">
        <div>
            <div>
                <label for="">Beds</label>
                <input type="text" v-model.number="form.beds" name="" id="" />
                <div v-if="form.errors.beds" class="error">
                    {{ form.errors.beds }}
                </div>
            </div>
            <div>
                <label for="">Baths</label>
                <input type="text" v-model.number="form.baths" name="" id="" />
                <div v-if="form.errors.baths" class="error">
                    {{ form.errors.baths }}
                </div>
            </div>
            <div>
                <label for="">Area</label>
                <input type="text" v-model.number="form.area" name="" id="" />
                <div v-if="form.errors.area" class="error">
                    {{ form.errors.area }}
                </div>
            </div>
            <div>
                <label for="">Cty</label>
                <input type="text" v-model="form.city" name="" id="" />
                <div v-if="form.errors.city" class="error">
                    {{ form.errors.city }}
                </div>
            </div>
            <div>
                <label for="">Post Code</label>
                <input type="text" v-model="form.code" name="" id="" />
                <div v-if="form.errors.code" class="error">
                    {{ form.errors.code }}
                </div>
            </div>
            <div>
                <label for="">Street</label>
                <input type="text" v-model="form.street" name="" id="" />
                <div v-if="form.errors.street" class="error">
                    {{ form.errors.street }}
                </div>
            </div>
            <div>
                <label for="">Street NR</label>
                <input type="text" v-model="form.street_nr" name="" id="" />
                <div v-if="form.errors.street_nr" class="error">
                    {{ form.errors.street_nr }}
                </div>
            </div>
            <div>
                <label for="">Price</label>
                <input type="text" v-model.number="form.price" name="" id="" />
                <div v-if="form.errors.price" class="error">
                    {{ form.errors.price }}
                </div>
            </div>
            <div>
                <button type="submit">Update</button>
            </div>
        </div>
    </form>
</template>

<style scoped>
label {
    margin-right: 2em;
}
div {
    padding: 2px;
}
</style>
