<template>
  <b-sidebar
    id="nav-sidebar"
    width="270px"
    no-header
    backdrop-variant="dark"
    backdrop
    z-index="1031"
  >
    <header
      class="d-flex justify-content-between align-items-baseline px-4 py-3"
    >
      <h5 class="font-weight-bold">Markets1A</h5>
      <default-button class="small mt-1" :onClick="goToLogin">
        Entrar
      </default-button>
    </header>
    <b-list-group class="my-3">
      <b-list-group-item
        class="d-flex justify-content-between align-items-baseline"
        disabled
      >
        Productos
        <b-icon icon="arrow-bar-right"></b-icon>
      </b-list-group-item>
      <b-list-group-item
        class="d-flex justify-content-between align-items-baseline"
        disabled
      >
        Categorías
        <b-icon icon="arrow-bar-right"></b-icon>
      </b-list-group-item>
      <b-list-group-item to="/">Inicio</b-list-group-item>
      <b-list-group-item to="/shop">Tienda</b-list-group-item>
      <b-list-group-item to="/#map-contact">Contáctenos</b-list-group-item>
      <b-list-group-item disabled>Cerrar Sesión</b-list-group-item>
    </b-list-group>
    <template #footer="{ hide }">
      <footer class="d-flex justify-content-start px-2 py-3">
        <default-button icon-name="patch-question" :onClick="hide">
          Ayuda
        </default-button>
      </footer>
    </template>
  </b-sidebar>
</template>
<script>
import DefaultButton from "@/components/buttons/DefaultButton";
export default {
  name: "MainNavSideBar",
  components: { DefaultButton },
  methods: {
    goToLogin() {
      this.$router.push({ name: "Login" });
    }
  }
};
</script>
<style lang="scss" scoped>
.list-group {
  & .list-group-item {
    background-color: transparent;
    border-top: 1px solid rgba(0, 0, 0, 0.125);
    padding: 1.1rem 1.25rem;
    &:hover {
      color: darken($secondary, 10);
    }
    &.router-link-exact-active {
      color: $secondary;
    }
  }
}
</style>
