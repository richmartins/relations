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
    <div class="flex items-center justify-center">
        <form
            @submit.prevent="authStore.handleRegister(form)"
            name="register"
            class="w-full max-w-sm"
        >
            <div class="mt-5 flex flex-col items-start">
                <h1>Register</h1>
                <label
                    class="mt-5 block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="name"
                >
                    Name</label
                >
                <input
                    name="name"
                    id="name"
                    class="bg-transparent w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none border"
                    type="text"
                    placeholder="John Doe"
                    v-model="form.name"
                />

                <label
                    class="mt-5 block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="email"
                    >email</label
                >
                <input
                    name="email"
                    id="email"
                    class="bg-transparent w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none border"
                    type="email"
                    placeholder="john.doe@exemple.com"
                    v-model="form.email"
                />
                <label
                    class="mt-5 block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="password"
                    >password</label
                >
                <input
                    name="password"
                    id="password"
                    class="bg-transparent w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none border"
                    type="password"
                    v-model="form.password"
                />
                <label
                    class="mt-5 block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="passowrd_confirmation"
                    >passowrd confirmation</label
                >
                <input
                    name="passowrd_confirmation"
                    id="passowrd_confirmation"
                    class="bg-transparent w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none border"
                    type="password"
                    v-model="form.password_confirmation"
                />
                <div
                    class="my-5 w-full flex flex-row items-center justify-evenly"
                >
                    <button
                        class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded"
                        type="button "
                    >
                        Sign up
                    </button>
                </div>
            </div>
        </form>
    </div>
</template>
