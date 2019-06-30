<template>
  <div class="increment-wrapper-custom">
    <div class="hero">
      <h1 class="tagline">WE WANT YOU TO SUCCEED</h1>
      <p>
        We create beautiful and secured websites, and mobile applications. Just relax and we will give solutions to your needs. Got something awesome for us to work on?
      </p>
      <div class="btn btn-primary">GET QUOTE NOW!</div>
    </div>
    <div class="devices">

      <span class="android">
        <Android :content="'http://increment.ltd'"></Android>
      </span>
      <div class="desktop">
        <Desktop :content="'http://increment.ltd'"></Desktop>
      </div>
    </div>

  </div>
</template>
<style lang="scss" scoped>
@import "~@/styles/colors.scss";
.increment-wrapper-custom {
  min-height: 80vh;
  background-color: $primary;
  overflow-y: hidden;
}
.hero {
  margin-bottom: 100px;
  width: 50%;
  float: left;
  padding-left: 4%;
}

.hero .tagline {
  color: white;
  font-weight: bold;
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
  float: left;
  width: 50%;
  min-height: 100px;
  overflow-y: hidden;
  margin-top: 75px;
  margin-bottom: 25px;
}
.desktop{
  width: 70%;
  height: 300px;
  position: relative;
  float: left;
  margin-top: 100px;
}
.android{
  height: 400px;
  width: 30%;
  position: relative;
  float: left;
}
@media screen and (max-width: 992px) {

  .hero{
    margin-top: 40px;
    margin-bottom: 40px;
    width: 100%;
    margin: 40px 0%;
    float: left;
    padding: 0% 2%;
    text-align: center;
  }

  .hero .tagline{
    font-size: 42px;
  }

  .devices{
    width: 98%;
    margin-right: 1%;
    margin-left: 1%;
    margin-top: 25px;
    margin-bottom: 50px;
  }
  .desktop{
    width: 90%;
    height: 250px;
    margin-top: 0px;
    margin-left: 5%;
  }
  .android{
    display: none;
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
