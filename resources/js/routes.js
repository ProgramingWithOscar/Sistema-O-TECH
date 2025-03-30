import { createRouter, createWebHistory } from 'vue-router';
import Home from '../views/home/home.vue';
import Login from "../views/login/Login.vue";

const routes = [
    {
        path: '/',
        name: 'login',
        component: Login
    },
    {
        path: '/home',
        name: 'homeS',
        component: Home,
        meta: { requiresAuth: true }, // Agregamos meta para rutas protegidas

    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
  });

  router.beforeEach((to, from, next) => {
    const user = JSON.parse(localStorage.getItem("user")); // Recupera el usuario guardado

    if (to.meta.requiresAuth && !user) {
      next({ name: "login" }); // Si no está autenticado, lo manda al login
    } else {
      next(); // Si está autenticado, lo deja pasar
    }
  });


  export default router;
