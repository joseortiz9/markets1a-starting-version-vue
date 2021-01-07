<template>
  <div class="d-flex flex-column text-center align-items-center">
    <h2 class="text-primary font-weight-bold mb-5">
      ¡Bienvenido de nuevo! <br />
      confirme su identidad.
    </h2>
    <b-button to="/auth/login" class="w-75 btn-login">
      Correo y contraseña
    </b-button>
    <b-button to="/auth/register" class="w-75 btn-register">
      Registrarse
    </b-button>
    <b-button to="/auth/login-phone" class="w-75 btn-sms" disabled>
      A través de SMS
    </b-button>
    <b-button to="/auth" class="w-75 btn-facebook" disabled>
      Facebook
    </b-button>
  </div>
</template>
<script>
export default {
  name: "AuthButtons",
  components: {}
};
</script>
<style lang="scss" scoped>
a.btn {
  margin-bottom: 0.75rem;
  background: $secondary;
  border-radius: 15px;
  font-size: 18px;
  padding: 1rem 30px;
  border: 0;
  @media screen and (max-width: 576px) {
    & {
      width: 100% !important;
    }
  }
}
</style>
