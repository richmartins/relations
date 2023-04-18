import Login from "@/components/Auth/Login.vue";
import Register from "@/components/Auth/Register.vue";
import Home from "@/components/Home.vue";
import { createRouter, createWebHistory } from "vue-router";

const routes = [
    { path: "/", name: "home", component: Home },
    { path: "/login", name: "login", component: Login },
    { path: "/register", name: "register", component: Register },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
