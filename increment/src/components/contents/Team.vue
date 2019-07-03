<template>
  <div class="increment-wrapper row" id="team" :style="{'background-image:':'url('+backgroundUrl+');'}">
    <div class="col-sm-4">
      <h1 class="text-center text-primary team-title" style="margin-top: 50px;">Meet our Team</h1>
    <p  class="team-desc">
      "We're a team of highly motivated technopreneurs. We do projects with a focus on quality and customer satisfaction. Our experience over the years let us create worthy online products that people can relate to, just like you."
    </p>
    </div>
    <div class="col-sm-4">
      <div class="text-center profile-image">
        <img src="" width="150" height="150">
        <h2 class="team-name">Kennette Canales</h2>
        <h3>CEO</h3>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="text-center profile-image">
        <img v-bind:src="'~@/assets/' + teamMember1" width="150" height="150"/>
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
.profile-image{
  padding-top: 100px;
  background-image: url('~@/assets/kenpp.png');
}
.two{
  background-size: 100% auto;
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
    teamMember1:'philpp.png',
    }
  },
  methods: {
  }
}
</script>
