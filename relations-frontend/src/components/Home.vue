<script setup>
import axios from "axios";
import { onMounted } from "vue";

let items = [];

onMounted(async () => {
    const data = await axios.get("/api/v1/items");
    items = data.items;
});
</script>
<template>
    <h1>HOME</h1>

    <div class="text-black my-5" v-for="item in items" :key="item">
        <router-link :to="item.id"> {{ item.name }}</router-link>
        {{ item.category }} <br />
        {{ item.description }}
    </div>
</template>
