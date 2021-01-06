<template>
  <b-form class="mx-2 my-auto d-inline w-100">
    <span class="form-control-feedback">
      <b-icon icon="search"></b-icon>
    </span>
    <b-form-input type="search" placeholder="¿Qué estás buscando?" />
  </b-form>
</template>
<script>
export default {
  name: "NavSearchForm",
  components: {}
};
</script>
<style lang="scss" scoped>
form {
  .form-control {
    padding-left: 2.375rem;
    border-radius: 25px;
  }
  .form-control-feedback {
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
</style>
