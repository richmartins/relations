<script setup>
import { onMounted } from "vue";
import { useAuthStore } from "../stores/auth";

const authStore = useAuthStore();

onMounted(async () => {
    await authStore.getUser();
});
</script>
<template>
    <h1>HOME</h1>
    <div v-if="authStore.user">
        <h2>{{ authStore.user.name }}</h2>
        <p>{{ authStore.user.email }}</p>
    </div>
    <div v-else>must login</div>
</template>
