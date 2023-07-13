<script setup>
import { useAuthStore } from "../../stores/auth";

const authStore = useAuthStore();

const form = {
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
};
</script>
<template>
    <h1>REGISTER</h1>
    <form @submit.prevent="authStore.handleRegister(form)" name="register">
        <label for="name">name</label>
        <input name="name" id="name" type="text" v-model="form.name" />
        <label for="email">email</label>
        <input name="email" id="email" type="email" v-model="form.email" />
        <label for="password">password</label>
        <input
            name="password"
            id="password"
            type="password"
            v-model="form.password"
        />
        <label for="passowrd_confirmation">passowrd confirmation</label>
        <input
            name="passowrd_confirmation"
            id="passowrd_confirmation"
            type="password"
            v-model="form.password_confirmation"
        />
        <input type="submit" value="register" />
    </form>
</template>
