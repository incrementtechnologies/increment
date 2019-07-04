<template>
  <div class="increment-wrapper text-white" id="quotation">
    <h3 class="text-center" style="margin-top: 50px;">GET QUOTE</h3>
    <h1 class="text-center">{{titles[activeStep - 1]}}</h1>
    <div class="platform-container" v-if="activeStep === 1">
      <span v-for="(item, index) in platforms" :key="index" class="rectangle" v-bind:class="{'selected': item.selected === true}" @click="select(index)">
        <font-awesome-icon :icon="item.icon" class="platform-item" style="margin-top: 40px;font-size: 48px;"></font-awesome-icon>
        <label class="platform-item" style="font-size: 18px; margin-top: 5px;">{{item.title}}</label>
      </span>
    </div>
    <div class="platform-container" v-if="activeStep === 2">
      <textarea rows="10" class="form-control" v-model="projectType" placeholder="Project details here..."></textarea>
    </div>
    <div class="platform-container" v-if="activeStep === 3">
      <span class="features-holder" v-for="(item, index) in features" :key="index">
        <span class="title">
          <font-awesome-icon icon="square"  class="selection-option" v-bind:class="{'selected-option': item.select === true}" @click="addSelection(item, index)"></font-awesome-icon>
          <label><b>{{item.title}}</b></label>
        </span>
        <label class="description">{{item.description}}</label>
      </span>
    </div>
    <div class="text-center buttons">
      <div class="btn btn-primary" v-if="activeStep > 1" @click="previous()">BACK</div>
      <div class="btn btn-primary" @click="next()">CONTINUE</div>
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
.selected{
  background: $secondary;
}
.increment-wrapper{
  background: $primary;
}
.platform-item{
  width: 100%;
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

.features-holder{
  width: 50%;
  float: left;
}

.features-holder .title{
  width: 100%;
  float: left;
  line-height: 24px;
  margin-bottom: 0px;
  font-size: 18px;
}

.features-holder .description{
  float: left;
  width: 100%;
  padding-left: 42px;
  font-size: 16px;
}

.features-holder .title label{
  margin-bottom: 0px;
  padding-left: 10px;
  line-height: 32px;
}
.selection-option{
  font-size: 32px;
  color: white;
  float: left;
}

.selection-option:hover{
  cursor: pointer;
  color: $tertiary;
}

.selected-option{
  color: $tertiary;
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
        icon: 'desktop', title: 'Android', selected: false
      }, {
        icon: 'desktop', title: 'Apple, IoS', selected: false
      }, {
        icon: 'desktop', title: 'Web', selected: false
      }],
      titles: ['Choose you platform(s)', 'Choose type of projects', 'Add your features'],
      projectType: null,
      activeStep: 3,
      features: [{
        title: 'Account Management', description: 'This is a test', select: false
      }, {
        title: 'Domain and Hosting', description: 'This is a test', select: false
      }]
    }
  },
  methods: {
    select (index) {
      if (this.platforms[index].selected === false) {
        this.platforms[index].selected = true
      } else {
        this.platforms[index].selected = false
      }
    },
    next () {
      let google = require('@/google.js')
      if (this.activeStep === 3) {
        google.auth()
      } else {
        this.activeStep++
      }
    },
    previous () {
      if (this.activeStep > 0) {
        this.activeStep--
      }
    },
    addSelection (item, index) {
      if (this.features[index].select === false) {
        this.features[index].select = true
      } else {
        this.features[index].select = false
      }
      // push to array hear later on
    }
  }
}
</script>
