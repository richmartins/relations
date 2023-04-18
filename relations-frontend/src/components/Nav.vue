<script setup></script>

<template>
    <h1>NAV</h1>
    <ul>
        <li>
            <router-link :to="{ name: 'home' }">home</router-link>
        </li>
        <li>
            <router-link :to="{ name: 'login' }">login</router-link>
        </li>
        <li>
            <router-link :to="{ name: 'register' }">register</router-link>
        </li>
    </ul>
</template>
