import About from "@/components/About.vue";
import ForgotPassowrd from "@/components/Auth/ForgotPassword.vue";
import Login from "@/components/Auth/Login.vue";
import Register from "@/components/Auth/Register.vue";
import ResetPassword from "@/components/Auth/ResetPassword.vue";
import Contact from "@/components/Contact.vue";
import Home from "@/components/Home.vue";
import Item from "@/components/Item.vue";

import { createRouter, createWebHistory } from "vue-router";

const routes = [
    { path: "/", name: "home", component: Home },
    { path: "/", name: "dashboard", component: Home },
    { path: "/about", name: "about", component: About },
    { path: "/contact", name: "contact", component: Contact },
    { path: "/login", name: "login", component: Login },
    { path: "/register", name: "register", component: Register },
    { path: "/item/:id", name: "item", component: Item },
    {
        path: "/forgot-password",
        name: "ForgotPassword",
        component: ForgotPassowrd,
    },
    {
        path: "/password-reset/:token",
        name: "ResetPassword",
        component: ResetPassword,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
