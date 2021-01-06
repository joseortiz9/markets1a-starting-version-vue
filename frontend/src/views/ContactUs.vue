<template>
  <!--MAP AND CONTACTS-->
  <section>
    <b-container>
      <b-row>
        <b-col sm="7">
          feaf
        </b-col>
        <b-col sm="5">
          <div class="us-dropped-container mr-5">
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

      <div class="shadow rounded">
        <div class="row">
          <b-col cols="12" md="5">
            <b-container class="mt-3">
              <h5 class="font-weight-bold">Nuestras sedes</h5>
              <ul class="list-unstyled">
                <li>
                  <b-icon icon="geo-alt-fill"></b-icon>
                  Calle 48 Bis #92-21
                </li>
              </ul>
              <h5 class="font-weight-bold">Horarios de Atención</h5>
              <ul class="list-unstyled">
                <li>
                  Lunes-viernes: 8am a 6pm
                </li>
                <li>
                  fin de semana y festivos: 8am a 4pm
                </li>
              </ul>
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
              <h5 class="font-weight-bold">Redes sociales</h5>
              <social-media-btns-row class="w-50 my-3" />
            </b-container>
          </b-col>
          <b-col cols="12" md="7">

          </b-col>
        </div>
      </div>
    </b-container>
  </section>
</template>
<script>
import SocialMediaBtnsRow from "@/components/buttons/SocialMediaBtnsRow";
import LocationCard from "@/components/cards/LocationCard";
export default {
  name: "ContactUs",
  components: {LocationCard, SocialMediaBtnsRow }
};
</script>
<style lang="scss" scoped>
.row {
  margin: 70px 0 100px 0;
}
.us-dropped-container {
  border: 5px solid $secondary;
  border-radius: 10px;
  img {
    transform: translate(30px, 30px);
    border-radius: 10px;
  }
}
</style>
