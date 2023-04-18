<script setup>
import axios from "axios";
import { useRouter } from "vue-router";

const router = useRouter();

const form = {
    name: "",
    email: "",
    password: "",
    passowrd_confirmation: "",
};

const register = async () => {
    await axios.post("register", {
        name: form.name,
        email: form.email,
        password: form.password,
        password_confirmation: form.passowrd_confirmation,
    });

    router.push("/login");
};
</script>
<template>
    <h1>REGISTER</h1>
    <form @submit.prevent="register" name="register">
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
            v-model="form.passowrd_confirmation"
        />
        <input type="submit" value="register" />
    </form>
</template>
