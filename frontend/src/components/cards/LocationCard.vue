<template>
  <b-card @click="onClick" class="rounded">
    <b-icon icon="shop" class="location-store-icon" />
    <h4 class="card-title mt-1 font-weight-bold">
      <span>{{ neighborhood }}</span>
    </h4>
    <span v-for="phone in phones" :key="phone">
      <b-icon icon="chat-dots" />
      <a :href="'tel:+57' + phone.trim().replace('-', '')">
        {{ phone }}
      </a>
    </span>
    <span class="mt-1"><b-icon icon="geo-alt-fill" />{{ address }}</span>
  </b-card>
</template>
<script>
export default {
  name: "LocationCard",
  props: {
    phones: { type: Array, required: true },
    neighborhood: { type: String, required: true },
    address: { type: String, required: true },
    onClick: { type: Function, default: () => {} }
  }
};
</script>
<style lang="scss" scoped>
.card {
  border: 2px solid $secondary-section-bg;
  padding: 30px;
  transition: 0.4s;
  &:hover {
    cursor: pointer;
    color: white;
    background-color: $secondary;
    a,
    .location-store-icon {
      color: white !important;
    }
  }
  .card-body {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    a {
      transition: 0.4s;
      color: $secondary;
    }
    .location-store-icon {
      transition: 0.4s;
      font-size: 60px;
      color: $primary;
    }
  }
}
</style>
