<template>
  <div class="phone-wrapper">
    <label class="speaker"></label>
      <label class="header">
      <font-awesome-icon icon="signal" class="righticonnn" style="margin-left:5px;"></font-awesome-icon>
      <font-awesome-icon icon="clock" class="righticon"></font-awesome-icon>
      <font-awesome-icon icon="wifi" class="righticonn"></font-awesome-icon>
       <font-awesome-icon icon="battery-full" class="righticon" style="margin-left:2px;"></font-awesome-icon>
    </label>
    <div class="phone-body">
      <HtmlContent :content="content"></HtmlContent>
    </div>
    <label class="home-swipe">
      <font-awesome-icon icon="caret-left" class="icon"></font-awesome-icon>
      <font-awesome-icon icon="circle" class="icon"></font-awesome-icon>
      <font-awesome-icon icon="square" class="icon"></font-awesome-icon>
    </label>
  </div>
</template>
<style lang="scss" scoped>
@import "~@/styles/colors.scss";
.phone-wrapper{
  width: 100%;
  height: 100%;
  float: left;
  border-radius: 20px;
  border: 5px solid black;
  background: black;
  position: relative;
}
.righticonn, .righticon{
  margin-top: 10px;
}
.righticonn{
  margin-left: 65%;
}
.header{
  background-color: white;
  width: 96%;
  height: 35px ;
  margin-left: 2%;
  border-top-left-radius: 17px;
  border-top-right-radius: 17px;

}

label{
  margin-bottom: 0;
}
.phone-body{
  width: 96%;
  height: 89%;
  margin-left: 2%;
  overflow:auto;
  overflow-x: hidden;
}
.speaker{
  background: black;
  height: 25px;
  width: 10%;
  margin-left: 45%;
  position: absolute;
  border-bottom-left-radius: 25px;
  border-bottom-right-radius: 25px;
}
.home-swipe{
  height: 42px;
  width: 96%;
  margin-left: 2%;
  margin-right: 2%;
  bottom: 0px;
  background: white;
  border-top: solid 1px $hover;
  position: absolute;
  border-bottom-left-radius: 20px;
  border-bottom-right-radius: 20px;
  text-align: center;
}
.home-swipe .icon{
  font-size: 16px;
  width: 20%;
  margin-top: 10px;
}

.phone-body::-webkit-scrollbar {
    width: 0px;
    background: transparent;
}

//tryyyy
@media screen and (max-width: 1015px) {
  .phone-wrapper{
  width: 275px;
  height: 78%;
  float: left;
  border-radius: 20px;
  border: 5px solid black;
  background: black;
  position: relative;
  }
  .phone-body{
  width: 96%;
  height: 86%;
  margin-left: 2%;
  overflow:auto;
  overflow-x: hidden;
}

 .righticonn{
  margin-left: 58%;
}
}
@media screen and (max-width: 1193px) {
 .phone-wrapper{
  width: 300px;
  height: 89%;
  float: left;
  border-radius: 20px;
  border: 5px solid black;
  background: black;
  position: relative;
  }
  .phone-body{
  width: 96%;
  height: 90%;
  margin-left: 2%;
  overflow:auto;
  overflow-x: hidden;
}

 .righticonn{
  margin-left: 58%;
}
}
@media screen and (max-width: 1265px) {
  .righticonn{
  margin-left: 67%;
}
}

@media screen and (max-width: 1158px) {
   .righticonn{
  margin-left: 60%;
}
}

@media screen and (max-width: 1193px) {
   .righticonn{
  margin-left: 67%;
}
}

@media screen and (max-width: 1153px) {
   .righticonn{
  margin-left: 67%;
}
}

@media screen and (max-width: 1100px) {
   .righticonn{
  margin-left: 67%;
}
}

@media screen and (max-width: 996px) {
  .righticonn{
  margin-left: 67%;
}
}
@media screen and (max-width: 1044px) {
   .righticonn{
  margin-left: 67%;
}
}

@media screen and (max-width: 1068px) {
  .righticonn{
  margin-left: 67%;
}
}

@media screen and (max-width: 1036px) {
   .righticonn{
  margin-left: 67%;
}
}

</style>
<script>
import HtmlContent from '@/components/devices/Content.vue'
export default {
  props: ['content'],
  components: {
    HtmlContent
  }
}
</script>
