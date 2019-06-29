<template>
  <footer>
    <div class="text-center text-white">
      <h1>support@incremnt.ltd</h1>
      <p>3rd Floor, Bunzel Bldg., Techhub Area, University  of San Carlos - Talamban Campus, Talamban, Cebu City, Philippines</p>
    </div>
  </footer>
</template>
<style lang="scss" scoped>
@import "~@/styles/colors.scss";
footer{
  background: $primary;
  min-height: 40vh;
  padding: 0px 10px;
  overflow-y: hidden;
}
h1{
  padding-top: 50px;
}
p{
  color: rgba(255, 255, 255, 0.6);
  font-size: 22px;
  max-width: 660px;
  margin: 0 auto 20px;
  font-weight: normal;
  line-height: 1.5;
  padding-bottom: 50px;
}

@media (max-width: 992px) {
  h1{
    font-size: 1.5rem;
  }
  p{
    font-size: 18px;
  }
}
</style>
<script>
export default {
}
</script>
