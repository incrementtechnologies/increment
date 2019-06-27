<template>
  <div class="app-wrapper">
    <Header></Header>
    <Container></Container>
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
import Container from '@/components/frame/Container.vue'
export default {
  components: {
    Header,
    Container
  }
}
</script>
