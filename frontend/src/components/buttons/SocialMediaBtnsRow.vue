<template>
  <div class="d-flex justify-content-around">
    <a
      href="https://www.facebook.com/Supermarkets-1A-119449439962921"
      target="_blank"
      class="facebook"
    >
      <b-img
        width="35"
        alt="facebook-logo"
        :src="require('../../assets/social_media/facebook.svg')"
      />
    </a>
    <a
      href="https://www.facebook.com/Supermarkets-1A-119449439962921"
      target="_blank"
      class="instagram"
    >
      <b-img
        width="35"
        alt="instagram-logo"
        :src="require('../../assets/social_media/instagram.svg')"
      />
    </a>
  </div>
</template>
<script>
export default {
  name: "SocialMediaBtnsRow"
};
</script>
<style lang="scss" scoped></style>
