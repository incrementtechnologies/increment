<template>
  <div class="increment-wrapper row teambg" id="team">
    <div class="col-sm-4">
      <h1 class="text-center text-primary team-title" style="margin-top: 50px;">Meet our Team</h1>
    <p  class="team-desc">
      "We're a team of highly motivated technopreneurs. We do projects with a focus on quality and customer satisfaction. Our experience over the years let us create worthy online products that people can relate to, just like you."
    </p>
    </div>
    <div class="col-sm-4">
      <div class="text-center profile-image">
        <img id="boxshadow" src="@/assets/kenpp.png" width="150" height="150">
        <h2 class="team-name">Kennette Canales</h2>
        <h3>CEO</h3>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="text-center profile-image">
        <img id="boxshadow" src="@/assets/philpp.png" width="150" height="150"/>
        <h2 class="team-name">Philip Salise</h2>
        <h3>Marketing</h3>
      </div>
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
  background: transparent;
  padding-left: 40px;
}
.platform-item{
  width: 100%;
  float: left;
}
.buttons{
  width: 100%;
  float: left;
  margin-top: 50px;
  margin-bottom: 50px;
}

.btn-primary {
  color: #fff;
  background-color: $secondary;
  border-color: #fffbfb !important;
  outline:none;
  font-size: 24px;
  padding: 18px 24px;
  transition:0.2s background-color;
}

.btn-primary:hover{
  cursor: pointer;
}
.btn-primary:active {
  transform:translateY(1px);
}

.form-control{
  min-height: 50px !important;
}
.error-border{
  border: solid 1px $error;
}
.sucess-border{
  border: solid 1px $secondary;
}
.team-desc{
  text-align: center;
}
.team-title{
  padding-top: 150px;
}
.team-name{
  padding-top: 20px;
}
.teambg{
  background-image: url('~@/assets/kenpp.png');
  background-size: 100%;
}
.profile-image{
  padding-top: 100px;
}
img{
  border-radius: 50%;
}
.two{
  background-size: 100% auto;
}
#boxshadow {
  position: relative;
  -moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
  -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
  box-shadow: 1px 1px 1px rgba(0, 0, 0, .5);
  padding: 10px;
  background: black;
}

/* Make the image fit the box */
#boxshadow img {
  width: 50%;
  border: 1px solid #000000;
  border-style: inset;
}
#boxshadow {
  position: relative;
  -moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
  -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
  box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
  padding: 5px;
  background: white;
}

/* Make the image fit the box */
#boxshadow img {
  width: 100%;
  border: 1px solid #8a4419;
  border-style: inset;
}

#boxshadow::after {
  content: '';
  position: absolute;
  z-index: -1; /* hide shadow behind image */
  -webkit-box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);
  box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);        
  width: 70%; 
  left: 15%; /* one half of the remaining 30% */
  height: 100px;
  bottom: 0;
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
    return {backgroundUrl:require(),
    }
  },
  methods: {
  }
}
</script>
