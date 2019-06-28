<template>
  <div class="increment-wrapper-custom">
    <div class="hero">
      <h1>WE WANT YOU TO SUCCEED</h1>
      <p>
        We create beautiful and secured websites, and mobile applications. Just relax and we will give solutions to your needs. Got something awesome for us to work on?
      </p>
      <div class="btn btn-primary">GET QUOTE NOW!</div>
    </div>
    <div class="devices">
      <Desktop :content="iPhoneContent"></Desktop>
    </div>

    <span class="android">
      <Android :content="iPhoneContent"></Android>
    </span>
  </div>
</template>
<style lang="scss" scoped>
@import "~@/styles/colors.scss";
.increment-wrapper-custom {
  height: 80vh;
  position: relative;
  background-color: $primary;
}
.hero {
  margin-bottom: 100px;
  z-index: 1;
  position: absolute;
  width: 90%;
  left: 5%;
}

.hero h1 {
  color: white;
  font-weight: bold;
  font-size: 48px;
  margin-bottom: 36px;
  padding-top: 50px;
}

.hero p {
  color: rgba(255, 255, 255, 0.6);
  font-size: 22px;
  max-width: 660px;
  font-weight: normal;
  line-height: 1.5;
}
.btn-primary {
  color: #fff;
  background-color: transparent;
  border-color: #fffbfb !important;
  outline:none;
  margin-right: 20px;
  margin-top: 20px;
  font-size: 24px;
  padding: 18px 24px;
  transition:0.2s background-color;
}

.btn-primary:hover {
  background-color:rgba(255,255,255,0.1);
}

.btn-primary:active {
  transform:translateY(1px);
}

.devices{
  width: 30%;
  height: 250px;
  position: absolute;
  right: 1%;
  bottom: 100px;
  z-index: 0;
}
.android{
  height: 300px;
  width: 160px;
  position: absolute;
  right: 30%;
  bottom: 100px;
}
@media screen and (max-width: 767px) {
  .hero{
    margin-top: 40px;
    margin-bottom: 40px;
  }

  .hero h1{
    font-size: 42px;
  }
}
</style>
<script>
import Desktop from '@/components/devices/Desktop.vue'
import Android from '@/components/devices/HuaweiP30.vue'
let header = '<h1 class=text-center>WE WANT YOU TO SUCCEED</h1>'
let p = '<p class=text-center>We create beautiful and secured websites, and mobile applications. Just relax and we will give solutions to your needs. Got something awesome for us to work on?</p>'
let btn = '<div class=text-center><div class="btn btn-primary">GET QUOTE NOW!</div></div>'
export default {
  data () {
    return {
      iPhoneContent: header + p + btn + btn + header + p + btn + btn
    }
  },
  components: {
    Desktop,
    Android
  }
}
</script>
