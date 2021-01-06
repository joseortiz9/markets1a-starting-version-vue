<template>
  <div id="app">
    <main-navbar />
    <transition name="fade" mode="out-in">
      <router-view />
    </transition>
    <main-footer />
  </div>
</template>

<script>
import MainNavbar from "@/components/MainNavbar";
import MainFooter from "@/components/MainFooter";
export default {
  components: { MainFooter, MainNavbar }
};
</script>
<style lang="scss">
@import url("https://fonts.googleapis.com/css?family=Open+Sans");
#app {
  font-family: "Open Sans", sans-serif;
  .text-primary {
    color: $primary !important;
  }
  .text-secondary {
    color: $secondary !important;
  }
  hr.section-hr {
    background: $secondary;
    height: 5px;
    width: 105px;
    margin-right: 100%;
    margin-bottom: 30px;
  }
  @media screen and (max-width: 768px) {
    & {
      margin-top: 105px;
    }
  }
}
</style>
