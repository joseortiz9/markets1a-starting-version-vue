<template>
  <footer>
    <div class="newsletter-section">
      <b-container
        class="d-flex flex-column flex-md-row align-items-center py-4"
      >
        <span class="lead font-weight-bold text-center mr-3">
          <b-icon icon="envelope" class="text-primary" />
          ¡Unete a la familia
          <span class="text-primary"> 1A </span>
          y <br />
          recibe todas nuestras <span class="text-secondary"> novedades</span>!
        </span>
        <newsletter-form class="mt-2 mt-md-0" />
        <default-button
          class="small ml-md-auto mt-4 mt-md-0"
          icon-name="shop"
          :onClick="goToContactUs"
        >
          Nuestras sucursales
        </default-button>
      </b-container>
    </div>
    <div class="footer-grid">
      <b-container>
        <b-row>
          <b-col>
            <h5 class="font-weight-bold">Nosotros</h5>
            <ul class="list-unstyled">
              <li>Todo sobre 1A</li>
              <li>Nuestros asociados</li>
              <li>Pruductos</li>
              <li>Mas información</li>
            </ul>
          </b-col>
          <b-col>
            <h5 class="font-weight-bold">Información</h5>
            <ul class="list-unstyled">
              <li>Politicas de envío y devolución</li>
              <li>Política de privacidad</li>
              <li>Términos y condiciones</li>
            </ul>
          </b-col>
          <b-col>
            <h5 class="font-weight-bold">Contactos</h5>
            <ul class="list-unstyled">
              <li>
                <b-icon icon="chat-dots" />
                <a href="tel:+573233442359">
                  323 344-2359
                </a>
              </li>
              <li>
                <b-icon icon="chat-dots" />
                <a href="tel:+573152611795">
                  315 261-1795
                </a>
              </li>
            </ul>
          </b-col>
          <b-col>
            <h5 class="font-weight-bold">Nuestras sedes</h5>
            <ul class="list-unstyled">
              <li>
                <b-icon icon="geo-alt-fill"></b-icon>
                Calle 48 Bis #92-21
              </li>
            </ul>
          </b-col>
          <b-col class="d-flex flex-column align-items-center justify-content-center">
            <b-img
              src="../assets/logo-footer.png"
              center
              fluid
              alt="about-us-img"
            ></b-img>
            <social-media-btns-row class="w-100" />
          </b-col>
        </b-row>
      </b-container>
    </div>
    <div class="copyright-bar">
      <b-container class="d-flex align-items-center py-3">
        <div class="mx-auto">
          <span>
            &copy; 2021 Supermarket1A | Desarrollado por Jose Ortiz
          </span>
        </div>
        <ScrollTopBtn />
      </b-container>
    </div>
  </footer>
</template>

<script>
import ScrollTopBtn from "@/components/buttons/ScrollTopBtn";
import NewsletterForm from "@/components/forms/NewsletterForm";
import DefaultButton from "@/components/buttons/DefaultButton";
import SocialMediaBtnsRow from "@/components/buttons/SocialMediaBtnsRow";
export default {
  name: "MainFooter",
  components: {
    SocialMediaBtnsRow,
    NewsletterForm,
    ScrollTopBtn,
    DefaultButton
  },
  methods: {
    goToContactUs() {
      this.$router.push({ name: "Shop" });
    }
  }
};
</script>
<style lang="scss" scoped>
footer {
  margin-top: 60px;
  .newsletter-section {
    background-color: $secondary-section-bg;
    span.lead {
      font-size: 95%;
    }
  }
  .footer-grid {
    background-color: $primary;
    padding: 75px 0 85px 0;
    color: white;
    h5 {
      margin-bottom: 15px;
    }
    ul li {
      margin-bottom: 6px;
      a {
        color: white;
        &:hover {
          text-decoration: none;
          color: darken(white, 30);
        }
      }
    }
  }
  .copyright-bar {
    span {
      font-size: 90%;
    }
    color: darken(white, 20);
    background-color: darken($primary, 20);
  }
}
</style>
