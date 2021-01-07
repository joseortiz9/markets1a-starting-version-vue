<template>
  <section>
    <b-container>
      <b-card no-body class="overflow-hidden my-5">
        <b-row no-gutters>
          <b-col md="6" class="d-none d-lg-flex">
            <b-card-img
              :src="require('@/assets/landing/login-banner.png')"
              alt="login-banner"
              class="rounded-0 mw-100"
            />
            <div
              class="bg-login-banner w-100 h-100 d-flex flex-wrap align-items-center justify-content-center position-absolute"
            >
              <h2 class="w-75 text-white text-center font-weight-bold">
                "Servicio, precio, surtido y calidad"
              </h2>
            </div>
          </b-col>
          <b-col cols="12" lg="6" class="d-flex align-items-center">
            <div class="card-body">
              <router-view />
            </div>
          </b-col>
        </b-row>
      </b-card>
    </b-container>
  </section>
</template>
<script>
export default {
  name: "AuthPage",
  components: {}
};
</script>
<style lang="scss" scoped>
.bg-login-banner {
  background: linear-gradient(
    89.54deg,
    #02025c 28.47%,
    rgba(2, 2, 92, 0) 99.55%
  );
}
</style>
