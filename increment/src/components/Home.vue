<template>
  <div class="app-wrapper">
    <Header></Header>
    <Container></Container>
    <Footer></Footer>
  </div>
</template>
<style lang="scss" scoped>
.app-wrapper{
  width: 100%;
  float: left;
  height: auto;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 13px;
}
</style>
<script>
import Header from '@/components/frame/Header.vue'
import Footer from '@/components/frame/Footer.vue'
import Container from '@/components/frame/Container.vue'
export default {
  components: {
    Header,
    Container,
    Footer
  }
}
</script>
