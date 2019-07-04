<template>
  <div class="increment-wrapper" id="team">
    <div class="team-holder">
      <h1 class="text-center increment-title text-white">Who are we?</h1>
      <h4 class="text-center text-white" style="margin-top: 25px;"><b>Increment Technologies</b> is a team of highly motivated technopreneurs. We do projects with a focus on quality and customer satisfaction. Our experience over the years let us create worthy online products that people can relate to, just like you.</h4>  
      <div class="platform-container">
        <div class="text-center message-holder" v-for="(item, index) in teams" :key="index">
          <span class="profile">
            <img :src="item.profile">
          </span>
          <h6 class="text-secondary"><b>{{item.name}}</b></h6>
          <label class="gray"><b>{{item.work}}</b></label>
          <label class="gray">{{item.position}}</label>
          <label v-if="item.socialMedia.length > 0" class="social-media">
            <font-awesome-icon v-for="(socialMedia, socialMediaIndex) in item.socialMedia" :key="socialMediaIndex" :icon="['fab', socialMedia.icon]" class="icon"></font-awesome-icon>
          </label>
        </div>
      </div>
    </div>
  </div>
</template>
<style lang="scss" scoped>
@import "~@/styles/colors.scss";
.increment-wrapper{
  background-image: url('~@/assets/team.png');
  background-size: 100% auto;
  background-repeat: no-repeat;
}
.team-holder{
  background: rgba(0, 0, 0, 0.5);
  height: 100%;
  width: 100%;
  float: left;
  padding: 0px 10%;
}
.platform-container{
  width: 100%;
  float: left;
  margin-top: 100px;
  margin-bottom: 100px;
}
.increment-title{
  margin-top: 100px;
}
.message-holder{
  float: left;
  height: auto;
  border-radius: 20px;
  width: 40%;
  margin-left: 5%;
  margin-right: 5%;
  margin-bottom: 50px;
  background: white;
}
.message-holder h1{
  color: $tertiary;
  margin-top: -25px;
}
.message-holder p{
  padding: 0px 10px;
}
.message-holder label{
  width: 100%;
  float: left;
}
.gray{
  color: gray;
}

.profile{
  width: 100%;
  float: left;
  min-height: 50px;
  overflow-x: hidden;
  text-align: center;
}

.profile img{
  height: 150px;
  width: 150px;
  border-radius: 50%;
  margin-top: 10px;
  margin-bottom: 10px;
}

.social-media{
  font-size: 24px;
  color: $primary;
}

.social-media .icon{
  margin-left: 5px;
  margin-right: 5px;
}

.social-media .icon:hover{
  cursor: pointer;
  color: $secondary;
}

@media (max-width: 992px) {
  .platform-container{
    margin-top: 50px;
  }
  .message-holder{
    width: 90%;
  }
  .increment-title{
    margin-top: 50px;
  }

  .increment-wrapper{
    background-size: auto 100%;
  }

}
</style>
<script>
export default {
  data () {
    return {
      teams: [{
        profile: require('../../assets/kenpp.png'),
        name: 'Engr. Kennette Canales',
        work: 'Full-Stack web and mobile developer',
        position: 'Executive / Operation',
        socialMedia: [{
          icon: 'facebook-f', url: 'https://www.facebook.com/kennCK94'
        }, {
          icon: 'linkedin', url: 'https://www.linkedin.com/in/kennette-canales-7a6648b1/'
        }, {
          icon: 'twitter', url: 'https://twitter.com/CKennDaONE'
        }, {
          icon: 'instagram', url: 'https://www.instagram.com/ckennda1/'
        }]
      }, {
        profile: require('../../assets/philpp.png'),
        name: 'Engr. Philip Johainnes Salise',
        work: 'Software Developer',
        position: 'Executive / Marketing',
        socialMedia: [{
          icon: 'facebook-f', url: 'https://www.facebook.com/ajohainnes.salise'
        }, {
          icon: 'linkedin', url: 'https://www.linkedin.com/in/phsalise/'
        }]
      }]
    }
  }
}
</script>
