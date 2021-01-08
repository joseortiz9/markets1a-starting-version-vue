<template>
  <div class="m-4">
    <h2 class="text-primary font-weight-bold mb-3 mb-5">
      Iniciar Sesión
    </h2>
    <b-form @submit.prevent="onSubmit">
      <b-form-group
        id="email-input"
        label="Correo electrónico:"
        label-for="email-input-1"
        description="No compartiremos tu información con nadie."
      >
        <b-form-input
          id="email-input"
          v-model="form.email"
          type="email"
          placeholder="Digite su correo"
          required
        ></b-form-input>
      </b-form-group>
      <b-form-group
        id="pass-input"
        label="Contraseña:"
        label-for="pass-input-1"
      >
        <b-form-input
          id="pass-input"
          v-model="form.password"
          type="password"
          placeholder="Digite su contraseña"
          required
        ></b-form-input>
      </b-form-group>
      <default-button class="small">Ingresar</default-button>
      <div class="d-flex flex-wrap justify-content-between">
        <span class="mt-4 font-weight-bold">
          ¿Eres nuevo?
          <router-link to="/auth/register" class="text-secondary">
            Regístrate
          </router-link>
        </span>
        <router-link
          to="/auth/forgot-password"
          class="mt-4  text-secondary font-weight-bold"
        >
          ¿Olvidaste tu contraseña?
        </router-link>
      </div>
    </b-form>
  </div>
</template>
<script>
import DefaultButton from "@/components/buttons/DefaultButton";
export default {
  name: "LoginForm",
  components: { DefaultButton },
  data() {
    return {
      form: {
        email: "",
        password: ""
      }
    };
  },
  methods: {
    onSubmit() {
      alert(JSON.stringify(this.form));
    }
  }
};
</script>
<style lang="scss" scoped></style>
