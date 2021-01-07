<template>
  <main class="home">
    <!--BIG MAIN HERO-->
    <section class="landing-hero">
      <b-jumbotron
        fluid
        header="¡Haz tus compras sin salir de casa!"
        lead="Pide todo lo que necesites con nuestro nuevo servicio de delivery, rápido, fácil y sin salir de casa."
      >
        <default-button
          class="mt-3 mt-sm-4 mt-lg-5"
          icon-name="cart4"
          :onClick="goToShop"
        >
          Pide a domicilio
        </default-button>
      </b-jumbotron>
    </section>
    <!--CATEGORIES CAROUSEL-->
    <section class="categories-carousel">
      <b-container>
        <vue-horizontal-list
          :items="picsCategories"
          :options="carouselCategoriesProps"
        >
          <template v-slot:default="{ item }">
            <category-picture-card :item="item" />
          </template>
        </vue-horizontal-list>
        <div class="d-flex justify-content-end mt-3">
          <router-link to="/shop" class="text-secondary">
            Conocer más...
          </router-link>
        </div>
      </b-container>
    </section>
    <!--PRODUCTS ON DISCOUNT-->
    <section id="discounts">
      <b-container>
        <h1 class="text-primary font-weight-bold">Descuentos del mes</h1>
        <hr class="section-hr" />
        seccions de productos
      </b-container>
    </section>
    <!--OUR PLACES-->
    <section id="places-schedule">
      <b-container>
        <h1 class="text-primary font-weight-bold">Nuestras Sucursales</h1>
        <hr class="section-hr" />
        <b-row>
          <b-col cols="12" md="5">
            <location-card
              :onClick="goToContactUs"
              neighborhood="Valle del Lili"
              :phones="['323 344-2359', '315 261-1795']"
              address="Calle 48 Bis #92-21"
            />
          </b-col>
          <b-col cols="12" md="7">
            <schedules-card />
          </b-col>
        </b-row>
      </b-container>
    </section>
    <!--ABOUT US-->
    <section class="about-us">
      <b-container>
        <b-row class="text-left">
          <b-col cols="12" sm="8">
            <h1 class="text-primary font-weight-bold">Sobre nosotros</h1>
            <hr class="section-hr" />
            <p class="lead text-justify">
              Supermarket 1a, somos la solución a sus problemas de
              abastecimiento, nuestro formato Market nos permite brindarle un
              servicio diferencial, ágil y personalizado, con mayor cercanía a
              su hogar, colocando a su alcance gran variedad de productos de la
              más alta calidad y lo mejor con "precios justos" <br />
              Servicio a Domicilios Totalmente Gratis
            </p>
            <div class="mx-auto mt-5 text-center">
              <span class="lead font-weight-bold">
                1A Supermarkets
                <span class="text-primary">¡Los Mejores </span>
                <span class="text-secondary">en Todo!</span>
              </span>
            </div>
          </b-col>
          <b-col cols="0" sm="1"></b-col>
          <b-col
            cols="12"
            sm="3"
            class="d-flex align-items-center justify-content-center"
          >
            <b-img
              :src="require('@/assets/landing/about-us-img.jpeg')"
              center
              fluid
              rounded="circle"
              alt="about-us-img"
            ></b-img>
          </b-col>
        </b-row>
      </b-container>
    </section>
    <section class="about-us2">
      <b-container
        class="d-flex flex-wrap justify-content-around lead font-weight-bold py-5"
      >
        <span class="d-flex my-3 my-sm-0 align-items-center">
          <b-icon icon="bookmark-star-fill" />
          Calidad
        </span>
        <span class="d-flex my-3 my-sm-0 align-items-center">
          <b-icon icon="truck" />
          Entrega a tu puerta
        </span>
        <span class="d-flex my-3 my-sm-0 align-items-center">
          <b-icon icon="shield-lock-fill" />
          Seguridad
        </span>
      </b-container>
    </section>
    <!--OUR BRANDS-->
    <section class="our-brands">
      <b-container>
        <h1 class="text-primary font-weight-bold">Nuestros asociados</h1>
        <hr class="section-hr" />
      </b-container>
      <div class="curved-container mt-3 mb-5">
        <b-container class="text-center">
          <b-row align-h="center">
            <b-col cols="8">
              <p class="lead text-white font-weight-bold">
                En 1A Supermarkets contamos con una gran variedad de marcas de
                excelente calidad, siempre siendo ¡los mejores en todo!
              </p>
            </b-col>
          </b-row>
          <b-row align-h="center" class="mt-3">
            <b-col
              cols="4"
              sm="3"
              md="2"
              lg="1"
              v-for="brand in brands"
              :key="brand.id"
            >
              <b-img
                width="80"
                :src="brand.img"
                fluid
                alt="brand-bavaria"
              ></b-img>
            </b-col>
          </b-row>
        </b-container>
      </div>
    </section>
    <!--AD ABOUT DELIVERIES-->
    <section class="delivery-banner">
      <b-container>
        <b-row>
          <b-col cols="12" md="4">
            <div class="ad-img-cont shadow rounded">
              <b-img
                :src="require('@/assets/landing/delivery-banner2.png')"
                center
                fluid
                @click="goToShop()"
                alt="delivery-banner-img2"
              ></b-img>
            </div>
          </b-col>
          <b-col cols="6" md="4">
            <div class="ad-img-cont shadow rounded">
              <b-img
                :src="require('@/assets/landing/delivery-banner3.png')"
                center
                fluid
                @click="goToShop()"
                alt="delivery-banner-img1"
              ></b-img>
            </div>
          </b-col>
          <b-col cols="6" md="4">
            <div class="ad-img-cont shadow rounded">
              <b-img
                :src="require('@/assets/landing/delivery-banner1.png')"
                center
                fluid
                @click="goToShop()"
                alt="delivery-banner-img3"
              ></b-img>
            </div>
          </b-col>
        </b-row>
      </b-container>
    </section>
    <!--LEAD END TEXT-->
    <section>
      <b-container>
        <div class="mx-auto mt-5 text-center">
          <span class="lead font-weight-bold" style="opacity: 0.45">
            1A Supermarkets
            <span class="text-primary">¡Los Mejores </span>
            <span class="text-secondary">en Todo!</span>
          </span>
        </div>
      </b-container>
    </section>
  </main>
</template>

<script>
import DefaultButton from "@/components/buttons/DefaultButton";
import VueHorizontalList from "vue-horizontal-list";
import CategoryPictureCard from "@/components/cards/CategoryPictureCard";
import LocationCard from "@/components/cards/LocationCard";
import SchedulesCard from "@/components/cards/SchedulesCard";
export default {
  name: "Home",
  components: {
    SchedulesCard,
    LocationCard,
    CategoryPictureCard,
    DefaultButton,
    VueHorizontalList
  },
  methods: {
    goToShop() {
      this.$router.push({ name: "Shop" });
    },
    goToContactUs() {
      this.$router.push({ name: "ContactUs" });
    }
  },
  data() {
    return {
      carouselCategoriesProps: {
        autoplay: { play: true, repeat: true, speed: 5000 },
        responsive: [
          { end: 375, size: 1 },
          { start: 375, end: 768, size: 2 },
          { start: 768, end: 992, size: 3 },
          { size: 4 }
        ]
      },
      brands: [
        { id: 1, img: require("../assets/brands/bavaria.png") },
        { id: 2, img: require("../assets/brands/bavaria.png") },
        { id: 3, img: require("../assets/brands/bavaria.png") },
        { id: 4, img: require("../assets/brands/bavaria.png") },
        { id: 5, img: require("../assets/brands/bavaria.png") },
        { id: 6, img: require("../assets/brands/bavaria.png") },
        { id: 7, img: require("../assets/brands/bavaria.png") },
        { id: 8, img: require("../assets/brands/bavaria.png") }
      ],
      picsCategories: [
        { id: 1, img: require("../assets/categories/mask-group1.png") },
        { id: 2, img: require("../assets/categories/mask-group2.png") },
        { id: 3, img: require("../assets/categories/mask-group3.png") },
        { id: 4, img: require("../assets/categories/mask-group4.png") },
        { id: 5, img: require("../assets/categories/mask-group5.png") },
        { id: 6, img: require("../assets/categories/mask-group6.png") },
        { id: 7, img: require("../assets/categories/mask-group7.png") },
        { id: 8, img: require("../assets/categories/mask-group8.png") },
        { id: 9, img: require("../assets/categories/mask-group9.png") },
        { id: 10, img: require("../assets/categories/mask-group10.png") },
        { id: 11, img: require("../assets/categories/mask-group11.png") },
        { id: 12, img: require("../assets/categories/mask-group12.png") }
      ]
    };
  }
};
</script>
<style lang="scss" scoped>
.jumbotron {
  color: white;
  background-image: url("../assets/landing/landing-hero-bg.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 60vh;
  h1 {
    font-weight: bold;
  }
  & > .container > h1,
  & > .container > p {
    max-width: 60%;
  }
  @media screen and (max-width: 425px) {
    & > .container > h1,
    & > .container > p {
      max-width: 100%;
    }
  }
  @media screen and (max-width: 768px) {
    & h1 {
      font-size: 2.5rem;
    }
  }
  @media screen and (max-width: 992px) {
    & h1 {
      font-size: 2.9rem;
    }
  }
}

section:not(:first-child) {
  margin-top: 110px;
  @media screen and (max-width: 992px) {
    & {
      margin-top: 60px;
    }
  }
}

section.about-us {
  background: $secondary-section-bg;
  padding: 100px 0;
}
section.about-us2 {
  margin-top: 0;
  background-color: lighten($secondary-section-bg, 4);
  svg {
    color: $secondary;
    margin-right: 8px;
    font-size: 3rem;
  }
}

section.delivery-banner {
  img {
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: 0.3s ease-in-out;
    transition: 0.3s ease-in-out;
  }
  .ad-img-cont {
    margin: 0;
    padding: 0;
    background: #fff;
    overflow: hidden;
    &:hover img {
      cursor: pointer;
      -webkit-transform: scale(1.1);
      transform: scale(1.1);
    }
  }
}

section.our-brands {
  .curved-container {
    background: $secondary;
    border-bottom-left-radius: 50%;
    border-bottom-right-radius: 50%;
    padding: 55px 0 110px 0;
  }
}
</style>
