<template>
  <div class="increment-wrapper">
    <h1 class="bg-text">our values</h1>
    <div class="values-container">
      <span class="list-holder" v-for="(item, index) in list" :key="index">
        <label class="number">{{index + 1}}</label>
        <label class="text-white title">{{item.title}}</label>
      </span>
    </div>
  </div>
</template>
<style lang="scss" scoped>
@import "~@/styles/colors.scss";
.increment-wrapper{
  background: $secondary;
  position: relative;
  height: 80vh;
  min-height: 0;
}
.bg-text{
  position: absolute;
  font-size: 150px;
  font-weight: 600;
  opacity: 0.2;
  color: white;
  top: 10vh;
  z-index: 0;
  left: 30px;
}
.values-container{
  width: 80%;
  margin-left: 10%;
  margin-right: 10%;
  height: 100%;
  position: absolute;
  top: 30vh;
  z-index: 1;
}
.list-holder{
  width: 33%;
  float: left;
  height: 100px;
  font-size: 24px;
}
.list-holder .number{
  color: $tertiary;
  font-weight: 600;
  width: 10%;
  float: left;
  text-align: center;
}
.list-holder .title{
  font-weight: 600;
  width: 90%;
  float: left;
}
@media (max-width: 992px) {
  .increment-wrapper{
    min-height: 100vh;
    height: auto;
  }
  .values-container{
    position: initial;
    float: left;
    margin-bottom: 50px;
  }
  .values-container, .list-holder{
    width: 96%;
    margin-left: 2%;
    margin-right: 2%;
  }
  .bg-text{
    width: 100%;
    top: 0px;
    text-align: center;
    font-size: 2.5rem;
    left: 0px;
    text-transform: Capitalize;
    opacity: 1;
    margin-top: 50px;
    position: initial;
    float: left;
  }
  .list-holder{
    height: auto;
    padding: 10px 0px;
  }
}
</style>
<script>
export default {
  data () {
    return {
      list: [{
        title: 'We do the right thing. Always.'
      }, {
        title: 'We provide what is best always.'
      }, {
        title: 'We are committed to everything we do.'
      }, {
        title: 'We build a successful relationship.'
      }, {
        title: 'Communication is our tool for excellence.'
      }, {
        title: 'We always help everyone.'
      }]
    }
  }
}
</script>
