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
    <nav class="flex items-center justify-between flex-wrap bg-black p-6">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <img class="mr-5 object-cover h-20" :src="logo" alt="logo" />
            <span class="font-semibold text-xl tracking-tight">Relations</span>
        </div>
        1
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
            <div class="text-white px-5">
                <template v-if="!authStore.user">
                    <router-link
                        :to="{ name: 'login' }"
                        class="block rounded py-2 pr-4 pl-3 text-gray-50 hover:bg-gray-700"
                        >Login</router-link
                    >
                    <router-link
                        :to="{ name: 'register' }"
                        class="block rounded py-2 pr-4 pl-3 text-gray-50 hover:bg-gray-700 md:border-0"
                        >Register</router-link
                    >
                </template>
                <template v-else>
                    <button
                        @click="authStore.handleLogout"
                        class="block rounded py-2 pr-4 pl-3 text-gray-50 hover:bg-gray-700 md:border-0"
                    >
                        Logout
                    </button>
                </template>
            </div>
        </div>
    </nav>
</template>
