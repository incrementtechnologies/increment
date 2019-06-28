<template>
  <div class="increment-wrapper">
    <h1 class="text-center increment-title" style="margin-top: 50px;">We are very happy seeing our clients happy</h1>
    <div class="platform-container">
      <div class="text-center">
        <h1>
          <font-awesome-icon icon="quote-left"></font-awesome-icon>
        </h1>
        <h2>
          They are very creative and give really provide solutions to our accounting and payroll.
        </h2>
      </div>
    </div>
  </div>
</template>
<style lang="scss" scoped>
@import "~@/styles/colors.scss";
.platform-container{
  width: 100%;
  float: left;
}
@media (max-width: 992px) {
}
</style>
<script>
export default {
  data () {
    return {
      platforms: [{
        icon: 'desktop', title: 'Android'
      }, {
        icon: 'desktop', title: 'Apple, IoS'
      }, {
        icon: 'desktop', title: 'Web'
      }]
    }
  }
}
</script>
