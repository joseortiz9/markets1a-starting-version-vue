<template>
  <div class="item">
    <b-card
      :onClick="
        () => {
          alert(item.id);
        }
      "
      overlay
      :img-src="item.img"
      :img-alt="'category' + item.id"
      img-top
      align="center"
      class="rounded"
    >
      <div
        class="card-body card-img-overlay d-flex flex-column align-items-center justify-content-center text-white p-0"
      >
        <div class="card-title-container w-100">
          <h4 class="card-title py-3 m-0">
            {{ "item " + item.id }}
          </h4>
        </div>
        <span class="cart-icon-container">
          <b-icon icon="cart4"></b-icon>
        </span>
      </div>
    </b-card>
  </div>
</template>
<script>
export default {
  name: "CategoryPictureCard",
  props: {
    item: {
      type: Object
    }
  }
};
</script>
<style lang="scss" scoped>
.card {
  &:hover {
    box-shadow: 1rem 1rem 2rem rgba(0, 0, 0, 0.3);
    cursor: pointer;
    .card-body.card-img-overlay {
      background-color: rgba($primary, 0.7);
      .card-title-container {
        background-color: rgba($primary, 0);
      }
      .cart-icon-container {
        opacity: 1;
        font-size: 2rem;
      }
    }
  }
  .card-body.card-img-overlay {
    transition: all 0.5s;
    .card-title-container {
      //transform: rotate(-10deg);
      background-color: rgba($primary, 0.8);
    }
    .cart-icon-container {
      transition: all 0.4s;
      opacity: 0;
    }
  }
}
</style>
