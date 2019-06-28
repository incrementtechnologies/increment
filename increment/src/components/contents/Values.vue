<template>
  <div class="increment-wrapper" style="height: 80vh">
    <div class="bg-text">our values</div>
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
  height: 80vh;
  position: absolute;
  top: 20vh;
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
  .values-container, .list-holder{
    width: 96%;
    margin-left: 2%;
    margin-right: 2%;
  }
}
</style>
<script>
export default {
  data () {
    return {
      list: [{
        title: 'We do the right thing.'
      }, {
        title: 'We always communicate.'
      }, {
        title: 'We always ask what is unclear.'
      }, {
        title: 'We build a successful relationship.'
      }, {
        title: 'We argued what is best always.'
      }, {
        title: 'We always help everyone.'
      }]
    }
  }
}
</script>
