<script setup>
import axios from "axios";
import { onMounted } from "vue";
import { useRoute } from "vue-router";

const router = useRoute();
let item = {};

onMounted(async () => {
    const data = await axios.get('/api/v1/item/' + router.params.id);

   item = data

}),
</script>

<template>
    {{ item }}
</template>
