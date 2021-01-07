<template>
  <div>
    <MainNavSideBar />
    <b-navbar
      fixed="top"
      class="global-navbar m-md-0 p-1"
      type="dark"
      variant="dark"
    >
      <b-container fluid="md">
        <b-navbar-nav class="d-md-none">
          <b-nav-item href="#" v-b-toggle.nav-sidebar>
            <b-icon icon="list"></b-icon>
          </b-nav-item>
        </b-navbar-nav>

        <b-navbar-brand to="/">
          <b-img
            :src="require('@/assets/landing/logo-nav.png')"
            class="rounded"
            alt="navbar-logo"
            height="32"
          />
        </b-navbar-brand>
        <!-- center aligned search form -->
        <b-navbar-nav class="d-none d-md-flex mx-auto search-nav">
          <nav-search-form />
        </b-navbar-nav>
        <!-- Right aligned nav items -->
        <b-navbar-nav>
          <b-nav-item to="/auth">
            <b-icon icon="person-circle"></b-icon>
          </b-nav-item>
          <div class="d-none d-md-flex">
            <b-nav-item href="#">
              <b-icon icon="box-seam"></b-icon>
            </b-nav-item>
          </div>
          <b-nav-item href="#">
            <b-icon icon="cart4"></b-icon>
          </b-nav-item>
        </b-navbar-nav>
      </b-container>
    </b-navbar>
    <b-navbar
      fixed="top"
      id="search-sm-navbar"
      class="d-md-none px-3 global-navbar"
      type="dark"
      variant="dark"
    >
      <nav-search-form />
    </b-navbar>
    <!--NAVEGARTION NAVBAR-->
    <b-navbar id="navigation-navbar" class="d-none d-md-flex">
      <b-container>
        <b-navbar-nav class="w-100 justify-content-between">
          <b-nav-item to="/categories">
            <b-icon icon="card-list" />
            Categorias
          </b-nav-item>
          <b-nav-item to="/discounts">
            <b-icon icon="tags-fill" />
            Descuentos
          </b-nav-item>
          <b-nav-item to="/">Inicio</b-nav-item>
          <b-nav-item to="/contact-us">Contáctenos</b-nav-item>
          <b-nav-item to="/shop">Tienda</b-nav-item>
          <b-nav-item to="/auth">Ingresar</b-nav-item>
          <!--<b-nav-item to="/categories">Productos</b-nav-item>-->
        </b-navbar-nav>
      </b-container>
    </b-navbar>
  </div>
</template>

<script>
import MainNavSideBar from "@/components/MainNavSideBar";
import NavSearchForm from "@/components/forms/NavSearchForm";

export default {
  name: "MainNavbar",
  components: { NavSearchForm, MainNavSideBar },
  data() {
    return {};
  },
  methods: {}
};
</script>
<style lang="scss" scoped>
nav.global-navbar {
  background: $primary !important;
  @media screen and (min-width: 768px) {
    height: 75px;
    & .navbar-brand img {
      height: 40px;
    }
  }
  a.nav-link {
    font-size: 1.4rem;
  }
}
nav#search-sm-navbar {
  margin-top: 53px;
}

nav#navigation-navbar {
  background: $secondary-navbar-bg !important;
  margin-top: 75px;
  height: 42px;
  padding: 0 16px;
  box-sizing: border-box;
  overflow-x: auto;
  overflow-y: hidden;
  white-space: nowrap;
  -webkit-overflow-scrolling: touch;
  .container {
    display: flex;
  }
  a {
    color: $navbar-text;
    display: block;
    &:hover {
      text-decoration: none;
    }
    &.router-link-exact-active {
      color: $secondary;
      font-weight: bold;
      border-bottom: 2px solid $secondary;
    }
  }
}
</style>
