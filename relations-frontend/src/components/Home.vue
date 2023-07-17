<script setup>
import axios from "axios";
import { onMounted } from "vue";

let items = [];

onMounted(async () => {
    const data = await axios.get("/api/v1/items");
    items = data.data.items;
});
</script>
<template>
    <h1>HOME</h1>

    <div class="text-black my-5" v-for="item in items" :key="item">
        {{ item.name }} {{ item.category }} <br />
        {{ item.description }}
    </div>
</template>
