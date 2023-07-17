<script setup>
import { useAuthStore } from "../../stores/auth";

const authStore = useAuthStore();

const email = "";
</script>
<template>
    <div class="flex items-center justify-center">
        <div
            class="m-2 p-2 text-green-900 font-semibold bg-green-300 rounded-md"
            v-if="authStore.status"
        >
            {{ authStore.status }}
        </div>
        <form
            @submit.prevent="authStore.handleForgotPassword(email)"
            class="w-full max-w-sm"
        >
            <div class="mt-5 flex flex-col items-start">
                <h1>Enter your email and to reset your password</h1>
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
                    v-model="email"
                    placeholder="johndoe@example.com"
                    aria-label="Email"
                />

                <div
                    class="my-5 w-full flex flex-row items-center justify-evenly"
                >
                    <button
                        class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded"
                        type="submit"
                    >
                        Reset password
                    </button>
                </div>
            </div>
        </form>
    </div>
</template>
