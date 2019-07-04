<template>
  <div class="increment-wrapper" id="testimonials">
    <h1 class="text-center increment-title text-secondary">What they say to us!</h1>
    <h3 class="text-center text-tertiary">We are very happy seeing that our clients are happy as well</h3>
    <div class="platform-container">
      <div class="text-center message-holder" v-for="(item, index) in testimonials" :key="index">
        <h1>
          <font-awesome-icon icon="quote-left" class=""></font-awesome-icon>
        </h1>
        <p><i>{{item.message}}</i></p>
        <h6 class="text-primary"><b>{{item.name}}</b></h6>
        <label class="gray"><b>{{item.position}}</b></label>
        <label class="gray">{{item.country}}</label>
      </div>
    </div>
  </div>
</template>
<style lang="scss" scoped>
@import "~@/styles/colors.scss";
.increment-wrapper{
  background: white;
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
  border: solid 1px $secondary;
  width: 40%;
  margin-left: 5%;
  margin-right: 5%;
  margin-bottom: 50px;
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
}
</style>
<script>
export default {
  data () {
    return {
      testimonials: [{
        message: 'Increment has been a great help in optimizing my company\'s business processes. The team is very responsive and dynamic. Kudos!',
        name: 'Shannen Tan',
        country: 'Philippines',
        position: 'President and CEO, Mezzo Hotel'
      }, {
        message: 'They are amazing.',
        name: 'Jeremy Reid',
        country: 'Australia',
        position: 'Owner, TalkFluent'
      }]
    }
  }
}
</script>
