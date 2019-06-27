<template>
  <div class="increment-wrapper">
    <span class="wrapper-bg"></span>
    <span class="phone">
      <IPhone :content="iPhoneContent"></IPhone>
    </span>
    <span class="phoneX">
      <IPhoneX :content="iPhoneContent"></IPhoneX>
    </span>
    <span class="android">
      <Android :content="iPhoneContent"></Android>
    </span>
  </div>
</template>
<style lang="scss" scoped>
$primary: #3f0050;
$hover: #ccc;
$secondary: #22b173;
.increment-wrapper{
  background: transparent;
  width: 100%;
  height: 100vh;
  position: relative;
  overflow: hidden;
}
.wrapper-bg{
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  width: 100%;
  height: 60%;
  background-image: linear-gradient($primary, $secondary);
  transform: skewY(-6deg);
  transform-origin: top left;
}
.phone{
  height: 500px;
  width: 280px;
  position: absolute;
  left: 5%;
  top: 25px;
}
.phoneX{
  height: 550px;
  width: 280px;
  position: absolute;
  left: 30%;
  top: 25px;
}

.android{
  height: 550px;
  width: 280px;
  position: absolute;
  left: 60%;
  top: 25px;
}
</style>
<script>
import IPhone from '@/components/devices/IPhone.vue'
import IPhoneX from '@/components/devices/IPhoneX.vue'
import Android from '@/components/devices/Android.vue'
export default {
  data () {
    return {
      iPhoneContent: '<h1 class=text-center>Welcome to Increment</h1>'
    }
  },
  components: {
    IPhone,
    IPhoneX,
    Android
  }
}
</script>

