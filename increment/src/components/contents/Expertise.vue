<template>
  <div class="increment-wrapper">
    <span class="wrapper-bg"></span>
<!--     <span class="phone">
      <IPhone :content="iPhoneContent"></IPhone>
    </span>
    <span class="phoneX">
      <IPhoneX :content="iPhoneContent"></IPhoneX>
    </span>
    <span class="android">
      <Android :content="iPhoneContent"></Android>
    </span> -->
  </div>
</template>
<style lang="scss" scoped>
@import "~@/styles/colors.scss";
.increment-wrapper{
  background: transparent;
}
.wrapper-bg{
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  width: 100%;
  height: 60%;
  transform-origin: top left;
}
.phone{
  height: 500px;
  width: 280px;
  position: absolute;
  left: 5%;
  top: 25px;
  margin-bottom: 50px;
}
.phoneX{
  height: 550px;
  width: 280px;
  position: absolute;
  left: 30%;
  top: 25px;
  margin-bottom: 50px;
}

.android{
  height: 550px;
  width: 280px;
  position: absolute;
  left: 60%;
  top: 25px;
  margin-bottom: 50px;
}

@media (max-width: 992px) {
  .android, .phoneX{
    display: none;
  }
}
</style>
<script>
import IPhone from '@/components/devices/IPhone.vue'
import IPhoneX from '@/components/devices/IPhoneX.vue'
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
    IPhone,
    IPhoneX,
    Android
  }
}
</script>
