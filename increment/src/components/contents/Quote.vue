<template>
  <div class="increment-wrapper text-white">
    <h3 class="text-center" style="margin-top: 50px;">GET QUOTE</h3>
    <h1 class="text-center">Choose your platform(s)</h1>
    <div class="platform-container">
      <span v-for="(item, index) in platforms" :key="index" class="rectangle">
        <font-awesome-icon :icon="item.icon" class="platform-item" style="margin-top: 40px;font-size: 48px;"></font-awesome-icon>
        <label class="platform-item" style="font-size: 18px; margin-top: 5px;">{{item.title}}</label>
      </span>
    </div>
    <div class="text-center buttons">
      <div class="btn btn-primary">CONTINUE</div>
    </div>
  </div>
</template>
<style lang="scss" scoped>
@import "~@/styles/colors.scss";
.platform-container{
  width: 60%;
  float: left;
  margin-top: 25px;
  margin-left: 20%;
  margin-right: 20%;
}
.rectangle{
  width: 32%;
  float: left;
  height: 150px;
  background: $tertiary;
  margin-left: 1%;
  text-align: center;
}
.rectangle:hover{
  cursor: pointer;
  background: $secondary;
}
.increment-wrapper{
  background: $primary;
}
.platform-item{
  width: 100%;
  float: left;
}
.btn-primary {
  color: #fff;
  background-color: $secondary;
  border-color: #fffbfb !important;
  outline:none;
  margin-right: 20px;
  margin-top: 20px;
  font-size: 24px;
  padding: 18px 24px;
  transition:0.2s background-color;
}

.btn-primary:hover {
  cursor: pointer;
}

.buttons{
  width: 100%;
  float: left;
  margin-top: 50px;
  margin-bottom: 50px;
}
@media (max-width: 992px) {
  .platform-container, .rectangle{
    width: 96%;
    margin-left: 2%;
    margin-right: 2%;
    margin-bottom: 10px;
  }
}
</style>
<script>
export default {
  data () {
    return {
      platforms: [{
        icon: 'desktop', title: 'Android'
      }, {
        icon: 'desktop', title: 'Apple, IoS'
      }, {
        icon: 'desktop', title: 'Web'
      }]
    }
  }
}
</script>
