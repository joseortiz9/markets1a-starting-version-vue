import Vue from "vue";
import VueRouter from "vue-router";
import Home from "../views/Home.vue";
import NotFound from "../views/errors/NotFound";
import LoginForm from "@/components/forms/auth/LoginForm";
import RegistrationForm from "@/components/forms/auth/RegistrationForm";
import PhoneLoginForm from "@/components/forms/auth/PhoneLoginForm";
import AuthButtons from "@/components/buttons/AuthButtons";

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
    path: "/auth",
    name: "Auth",
    component: () => import("../views/auth/Index.vue"),
    children: [
      { path: "/", component: AuthButtons },
      { path: "login", component: LoginForm },
      { path: "register", component: RegistrationForm },
      { path: "login-phone", component: PhoneLoginForm }
    ]
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
