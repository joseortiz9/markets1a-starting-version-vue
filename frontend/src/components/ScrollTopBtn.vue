<template>
  <a @click="scrollTop" class="btn-to-top">
    <b-icon icon="arrow-bar-up"></b-icon>
  </a>
</template>
<script>
export default {
  name: "ScrollTopBtn",
  components: {},
  methods: {
    scrollTop() {
      this.intervalId = setInterval(() => {
        if (window.pageYOffset === 0) {
          clearInterval(this.intervalId);
        }
        window.scroll(0, window.pageYOffset - 50);
      }, 10);
    }
  }
};
</script>
<style lang="scss" scoped>
a.btn-to-top {
  font-size: 20px;
  border-radius: 5px;
  color: white;
  background-color: $secondary;
  padding: 8px 12px;
  cursor: pointer;
  &:hover {
    background-color: darken($secondary, 15);
    box-shadow: 6px 6px 10px darken($secondary, 30);
  }
}
</style>
