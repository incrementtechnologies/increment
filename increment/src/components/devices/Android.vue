<template>
  <div class="phone-wrapper">
    <div class="phone-header">
      <label class="camera">
        <font-awesome-icon icon="circle"></font-awesome-icon>
      </label>
      <label class="speaker"></label>
    </div>
    <div class="phone-body">
      <span v-html="content" class="content"></span>
    </div>
  </div>
</template>
<style lang="scss" scoped>
$gray: #ccc;
.phone-wrapper{
  width: 100%;
  height: 100%;
  float: left;
  border-radius: 20px;
  background: black;
  position: relative;
}
.phone-header{
  width: 100%;
  float: left;
}
.camera{
  float: left;
  margin-top: 5px;
  margin-left: 30%;
}
.speaker{
  height: 5px;
  width: 20%;
  background: #555;
  border-radius: 2px;
  margin-top: 10px;
  margin-left: 10%;
}

.phone-body{
  position: absolute;
  width: 96%;
  height: 90%;
  margin-left: 2%;
  margin-right: 2%;
  background:white;
  border-radius: 20px;
  bottom: 5%;
}

</style>
<script>
export default {
  props: ['content']
}
</script>
