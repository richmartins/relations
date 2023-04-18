import axios from "axios";
import { defineStore } from "pinia";

export const useAuthStore = defineStore("auth", {
    state: () => ({
        authUser: null,
    }),
    getters: {
        user: (state) => state.authUser,
    },
    actions: {
        async getToken() {
            await axios.get("/sanctum/csrf-cookie");
        },
        async getUser() {
            await this.getToken();
            const data = await axios.get("api/user");
            this.authUser = data.data;
        },
        async handleLogin(data) {
            await this.getToken();
            await axios.post("/login", {
                email: data.email,
                password: data.password,
            });
            this.router.push("/");
        },
    },
});
