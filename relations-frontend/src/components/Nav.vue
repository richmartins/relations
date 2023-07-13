<script setup>
import logo from "@/assets/logo_negative.png";
import { onMounted } from "vue";
import { useAuthStore } from "../stores/auth";

const authStore = useAuthStore();

onMounted(async () => {
    await authStore.getUser();
});
</script>

<template>
    <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <img class="mr-5 object-cover h-20" :src="logo" alt="logo" />
            <span class="font-semibold text-xl tracking-tight">Relations</span>
        </div>
        <div class="block lg:hidden">
            <button
                class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white"
            >
                <svg
                    class="fill-current h-3 w-3"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow">
                <router-link
                    :to="{ name: 'home' }"
                    class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4"
                >
                    Home
                </router-link>

                <router-link
                    :to="{ name: 'about' }"
                    class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4"
                >
                    About
                </router-link>

                <router-link
                    :to="{ name: 'contact' }"
                    class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4"
                >
                    Contact
                </router-link>
            </div>
            <div>
                <div v-if="authStore.user">
                    <h2>{{ authStore.user.name }}</h2>
                    <p>{{ authStore.user.email }}</p>
                </div>
                <div v-else>
                    <router-link
                        :to="{ name: 'login' }"
                        class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0"
                        >Login</router-link
                    >
                </div>
            </div>
        </div>
    </nav>
</template>
