<template>
  <!--MAP AND CONTACTS-->
  <section>
    <b-container>
      <h2 class="text-primary font-weight-bold mt-5">Nuestras tiendas</h2>
      <hr class="section-hr" />
      <b-row>
        <b-col
          cols="12"
          md="7"
          class="order-md-1 order-2 d-flex flex-column justify-content-center"
        >
          <schedules-card />
          <div
            class="d-inline-flex align-items-baseline justify-content-center"
          >
            <span class="lead font-weight-bold">¡Siguenos! </span>
            <social-media-btns-row class="mt-4 w-25" />
          </div>
        </b-col>
        <b-col cols="12" md="5" class="order-md-2 order-1">
          <div class="us-dropped-container mr-4">
            <b-img
              :src="require('../assets/about-us-img.jpeg')"
              center
              fluid
              alt="about-us-img"
            />
          </div>
        </b-col>
      </b-row>
      <b-row>
        <b-col cols="12" md="5">
          <location-card
            neighborhood="Valle del Lili"
            :phones="['323 344-2359', '315 261-1795']"
            address="Calle 48 Bis #92-21"
          />
        </b-col>
        <b-col cols="12" md="7">
          <div>
            <b-embed
              type="iframe"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7739.010197748498!2d-76.52063609717749!3d3.3769983217596113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a110436afcb7%3A0xd020dc8766488ff5!2sCl%2048%20Bis%20%2392-21%2C%20Cali%2C%20Valle%20del%20Cauca%2C%20Colombia!5e0!3m2!1sen!2sru!4v1604029240259!5m2!1sen!2sru"
              allowfullscreen
              aria-hidden="false"
            ></b-embed>
          </div>
        </b-col>
      </b-row>
    </b-container>
  </section>
</template>
<script>
import SocialMediaBtnsRow from "@/components/buttons/SocialMediaBtnsRow";
import LocationCard from "@/components/cards/LocationCard";
import SchedulesCard from "@/components/cards/SchedulesCard";
export default {
  name: "ContactUs",
  components: { SchedulesCard, LocationCard, SocialMediaBtnsRow }
};
</script>
<style lang="scss" scoped>
.container > .row {
  margin: 40px 0 100px 0;
  .us-dropped-container {
    border: 5px solid $secondary;
    border-radius: 10px;
    img {
      transform: translate(30px, 30px);
      border-radius: 10px;
    }
  }
}
</style>
