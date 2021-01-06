<template>
  <b-card
    overlay
    :img-src="require('../../assets/bg-stores-schedule.png')"
    img-alt="bg-stores-schedule"
    class="rounded"
  >
    <b-row>
      <b-col cols="12" class="store-schedule-title text-white font-weight-bold">
        A su servicio:
      </b-col>
    </b-row>
    <b-row>
      <b-col cols="5" lg="4" class="store-schedule-days order-lg-first">
        Lunes-Viernes
      </b-col>
      <b-col cols="7" lg="4" class="store-schedule-times">
        7am-10pm
      </b-col>
      <b-col cols="6" lg="5" class="store-schedule-days order-lg-first">
        Domingos-Festivos
      </b-col>
      <b-col cols="6" lg="4" class="store-schedule-times">
        7am-8pm
      </b-col>
    </b-row>
    <b-row>
      <b-col cols="12" class="store-schedule-subtitle text-white">
        Domicilios a su puerta:
      </b-col>
    </b-row>
    <b-row>
      <b-col cols="6" lg="12" class="store-schedule-days">
        Todos los días
      </b-col>
      <b-col cols="6" lg="12" class="store-schedule-times">
        9am-7pm
      </b-col>
    </b-row>
  </b-card>
</template>
<script>
export default {
  name: "SchedulesCard"
};
</script>
<style lang="scss" scoped>
.card .card-body {
  .store-schedule-title {
    font-size: 25px;
  }
  .store-schedule-subtitle {
    font-size: 20px;
    font-weight: 600;
    margin-top: 12px;
  }
  .store-schedule-days {
    text-transform: uppercase;
    font-weight: 800;
    font-size: 13px;
    margin-top: 10px;
  }
  .store-schedule-times {
    font-weight: 800;
    font-size: 23px;
    color: $primary;
  }
  @media screen and (max-width: 390px) {
    & {
      padding: 0.3rem;
      .store-schedule-title {
        font-size: 18px;
      }
      .store-schedule-subtitle {
        font-size: 15px;
        margin-top: 8px;
      }
      .store-schedule-days {
        text-transform: lowercase;
        font-size: 10px;
        margin-top: 5px;
      }
      .store-schedule-times {
        font-size: 17px;
      }
    }
  }
  @media screen and (min-width: 390px) and (max-width: 992px) {
    & {
      padding: 0.5rem;
      .store-schedule-title {
        font-size: 22px;
      }
      .store-schedule-subtitle {
        font-size: 18px;
        margin-top: 12px;
      }
      .store-schedule-days {
        font-size: 12px;
        margin-top: 10px;
      }
      .store-schedule-times {
        font-size: 21px;
      }
    }
  }
}
</style>
