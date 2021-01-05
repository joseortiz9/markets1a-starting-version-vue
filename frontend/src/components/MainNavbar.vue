<template>
  <div>
    <b-navbar
      fixed="top"
      id="global-navbar"
      class="m-md-0 p-1"
      type="dark"
      variant="dark"
    >
      <b-container fluid="md">
        <b-navbar-nav class="d-md-none">
          <b-nav-item href="#" v-b-toggle.nav-sidebar>
            <b-icon icon="list"></b-icon>
          </b-nav-item>
        </b-navbar-nav>
        <MainNavSideBar />

        <b-navbar-brand to="/">
          <b-img
            src="../assets/logo-nav.png"
            class="rounded"
            alt="navbar-logo"
            height="32"
          />
        </b-navbar-brand>
        <!-- center aligned search form -->
        <b-navbar-nav class="d-none d-md-flex mx-auto search-nav">
          <b-nav-form>
            <b-form-group size="md">
              <span class="form-control-feedback">
                <b-icon icon="search"></b-icon>
              </span>
              <b-form-input
                type="search"
                placeholder="¿Qué estás buscando?"
              ></b-form-input>
            </b-form-group>
          </b-nav-form>
        </b-navbar-nav>
        <!-- Right aligned nav items -->
        <b-navbar-nav>
          <div class="d-none d-md-flex">
            <b-nav-item to="/login">
              <b-icon icon="person-circle"></b-icon>
            </b-nav-item>
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
    <!--NAVEGARTION NAVBAR-->
    <b-navbar id="navigation-navbar" class="d-none d-md-flex">
      <b-container>
        <b-navbar-nav class="mx-auto">
          <b-nav-item to="/">Inicio</b-nav-item>
          <b-nav-item to="/#map-contact">Contáctenos</b-nav-item>
          <b-nav-item to="/shop">Tienda</b-nav-item>
          <b-nav-item to="/login">Ingresar</b-nav-item>
          <!--<b-nav-item to="/categories">Productos</b-nav-item>-->
        </b-navbar-nav>
      </b-container>
    </b-navbar>
  </div>
</template>

<script>
import MainNavSideBar from "@/components/MainNavSideBar";

export default {
  name: "MainNavbar",
  components: { MainNavSideBar },
  data() {
    return {};
  },
  methods: {}
};
</script>
<style lang="scss" scoped>
nav#global-navbar {
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
  .search-nav .form-control {
    padding-left: 2.375rem;
    border-radius: 25px;
  }

  .search-nav .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: $secondary;
  }
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
