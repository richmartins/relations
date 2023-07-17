<script setup>
import { useRoute } from "vue-router";
import { useAuthStore } from "../../stores/auth";

const route = useRoute();
const authStore = useAuthStore();

const form = {
    password: "",
    password_confirmation: "",
    email: route.query.email,
    token: route.params.token,
};
</script>
<template>
    <div class="flex items-center justify-center">
        <form
            @submit.prevent="authStore.handleResetPassword(form)"
            class="w-full max-w-sm"
        >
            <div
                class="m-2 p-2 text-green-900 font-semibold bg-green-300 rounded-md"
                v-if="authStore.status"
            >
                {{ authStore.status }}
            </div>
            <div class="mt-5 flex flex-col items-start">
                <h1>Enter your new password</h1>
                <label
                    class="mt-5 block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="password"
                >
                    Password
                </label>
                <input
                    id="password"
                    class="bg-transparent w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none border"
                    type="password"
                    v-model="form.password"
                    aria-label="password"
                />

                <div v-if="authStore.errors.password" class="flex">
                    <span class="text-red-400 text-sm m-2 p-2">{{
                        authStore.errors.password[0]
                    }}</span>
                </div>

                <label
                    class="mt-5 block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="password_confimartion"
                >
                    Confirm password
                </label>
                <input
                    id="password_confirmation"
                    class="bg-transparent w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none border"
                    type="password"
                    v-model="form.password_confirmation"
                    aria-label="Confrim password"
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
