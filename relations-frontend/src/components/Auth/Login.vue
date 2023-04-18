<script setup>
const form = {
    email: "",
    password: "",
};
</script>
<template>
    <h1>LOGIN</h1>
    <form @submit.prevent="handleLogin">
        <label for="email">email</label>
        <input name="email" id="email" type="email" v-model="form.email" />
        <label for="password">password</label>
        <input
            name="password"
            id="username"
            type="password"
            v-model="form.password"
        />
        <input type="submit" value="login" />
    </form>
</template>
