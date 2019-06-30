<template>
  <div class="app-wrapper">
    <Header></Header>
    <span class="return-to-top" @click="scrollTo()">
      <font-awesome-icon icon="chevron-up" style="font-size: 24px;" class="icon"></font-awesome-icon>
    </span>
    <Footer></Footer>
  </div>
</template>
<style lang="scss" scoped>
@import "~@/styles/colors.scss";
.app-wrapper{
  width: 100%;
  float: left;
  height: auto;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 13px;
}
.return-to-top{
  position: fixed;
  bottom: 10px;
  right: 10px;
  background: $primary;
  color: white;
  height: 50px;
  width: 50px;
  border-radius: 5px;
  line-height: 50px;
  text-align: center;
}
.icon{
  padding-top: 5px;
}
.return-to-top:hover{
  cursor: pointer;
  color: $tertiary;
  .icon{
    padding-top: 0px;
  }
}
</style>
<script>
import Header from '@/components/frame/Header.vue'
import Footer from '@/components/frame/Footer.vue'
import Jquery from 'jquery'
export default {
  components: {
    Header,
    Footer
  },
  methods: {
    scrollTo () {
      Jquery('html, body').animate({
        scrollTop: Jquery('#home').offset().top
      }, 1000)
    }
  }
}
</script>
