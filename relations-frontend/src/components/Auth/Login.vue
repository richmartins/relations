<script setup>
import { useAuthStore } from "../../stores/auth";

const authStore = useAuthStore();

const form = {
    email: "",
    password: "",
};
</script>
<template>
    <div class="flex items-center justify-center">
        <form
            @submit.prevent="authStore.handleLogin(form)"
            class="w-full max-w-sm"
        >
            <div class="mt-5 flex flex-col items-start">
                <h1>Enter your email and password to sign in</h1>
                <label
                    class="mt-5 block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="email"
                >
                    Email
                </label>
                <input
                    id="email"
                    class="bg-transparent w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none border"
                    type="text"
                    v-model="form.email"
                    placeholder="johndoe@example.com"
                    aria-label="Email"
                />

                <label
                    class="mt-5 block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="password"
                >
                    password
                </label>
                <input
                    id="password"
                    class="bg-transparent w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none border"
                    type="password"
                    v-model="form.password"
                    aria-label="Password"
                />
                <div
                    class="my-5 w-full flex flex-row items-center justify-evenly"
                >
                    <button
                        class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded"
                        type="submit"
                    >
                        Sign in
                    </button>

                    <router-link
                        to="/forgot-password"
                        class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded"
                    >
                        Forgot Password?
                    </router-link>
                </div>
                <div
                    class="my-5 w-full flex flex-row items-center justify-evenly"
                >
                    <p class="text-base text-[#adadad]">
                        Not a member yet?
                        <router-link
                            to="/register"
                            class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded"
                        >
                            Sign Up
                        </router-link>
                    </p>
                </div>
            </div>
        </form>
    </div>
</template>
