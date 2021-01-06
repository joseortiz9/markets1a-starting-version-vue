<template>
  <div>
    <b-form class="d-flex" @submit.prevent="sendNewsletterEmail">
      <b-form-input
        id="newsletter-input"
        aria-label="Newsletter form"
        placeholder="Ingresa tu email"
        class="mr-1"
      ></b-form-input>
      <default-button class="small">
        <b-icon icon="check2-circle"></b-icon>
      </default-button>
    </b-form>
  </div>
</template>
<script>
import DefaultButton from "@/components/buttons/DefaultButton";
export default {
  name: "NewsletterForm",
  components: { DefaultButton },
  methods: {
    sendNewsletterEmail() {
      alert("Pronto disponible!");
    }
  }
};
</script>
<style lang="scss" scoped></style>
