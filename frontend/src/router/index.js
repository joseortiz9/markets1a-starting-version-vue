import Vue from "vue";
import VueRouter from "vue-router";
import Home from "../views/Home.vue";
import NotFound from "../views/errors/NotFound";

Vue.use(VueRouter);

const routes = [
  {
    path: "/",
    name: "Home",
    component: Home
  },
  {
    path: "/contact-us",
    name: "ContactUs",
    component: () => import("../views/ContactUs.vue")
  },
  {
    path: "/shop",
    name: "Shop",
    component: () => import("../views/Shop.vue")
  },
  {
    path: "/login",
    name: "Login",
    component: () => import("../views/auth/Login.vue")
  },
  { path: "/404", component: NotFound },
  { path: "*", redirect: "/404" }
];

const scrollBehavior = to => {
  if (to.hash) {
    return {
      selector: to.hash
    };
  }
};

const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes,
  scrollBehavior
});

export default router;
