<template>
  <div class="increment-wrapper text-white" id="quotation">
    <h3 class="text-center" style="margin-top: 50px;">GET QUOTE</h3>
    <h1 class="text-center">{{titles[activeStep - 1]}}</h1>
    <div class="platform-container" v-if="activeStep === 1">
      <span v-for="(item, index) in platforms" :key="index" class="rectangle" v-bind:class="{'selected': item.selected === true}" @click="select(index)">
        <font-awesome-icon :icon="item.icon" class="platform-item" style="margin-top: 40px;font-size: 48px;" v-if="item.icon ===  'desktop'"></font-awesome-icon>
        <font-awesome-icon :icon="['fab', item.icon]" class="platform-item" style="margin-top: 40px;font-size: 48px;" v-if="item.icon !==  'desktop'"></font-awesome-icon>
        <label class="platform-item" style="font-size: 18px; margin-top: 5px;">{{item.title}}</label>
      </span>
    </div>
    <div class="platform-container" v-if="activeStep === 2">
      <QuoteDetails @previousEvent="previous" @continueEvent="validate2($event)"></QuoteDetails>
    </div>
    <div class="platform-container" v-if="activeStep === 3">
      <span class="features-holder" v-for="(item, index) in features" :key="index">
        <span class="title">
          <font-awesome-icon icon="square"  class="selection-option" v-bind:class="{'selected-option': item.select === true}" @click="addSelection(item, index)"></font-awesome-icon>
          <label><b>{{item.title}}</b></label>
        </span>
        <label class="description">{{item.description}}</label>
      </span>
      <span class="add-features">
        <h6>Add custom feature</h6>
        <label style="width: 100%; float: left;" class="text-danger" v-if="errorAddFeature !== null">Opps! {{errorAddFeature}}</label>
        <span class="inputs">
          <input type="text" class="form-control" placeholder="Title" :value="newTitle" @input="checkInput('Title', $event)">
          <input type="te" class="form-control" placeholder="Description" :value="newDescription" @input="checkInput('Description', $event)">
          <span class="button">
            <button class="btn btn-primary" @click="addFeature()">
              <font-awesome-icon icon="plus"></font-awesome-icon>
            </button>
          </span>
        </span>
      </span>
    </div>
    <div class="platform-container" v-if="activeStep === 4">
      <h1 v-if="email !== null" class="text-center">Hi {{email}}!</h1>
      <h1 class="text-center" style="margin-top: 25px;">
        Thank you and kindly check your email with in a day.
      </h1>
    </div>
    <div class="text-center buttons" v-if="activeStep !== 2 && activeStep !== 4">
      <div class="btn btn-primary" v-if="activeStep > 1" @click="previous()">BACK</div>
      <div class="btn btn-primary" @click="next()">CONTINUE</div>
    </div>
    <div class="text-center buttons" v-if="activeStep === 4">
      <div class="btn btn-primary" @click="activeStep = 1">Back</div>
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
  min-height: 100px;
  overflow-y: hidden;
  padding: 0px 10px;
  text-align: justify;
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
  font-size: 13px;
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

.add-features{
  width: 100%;
  float: left;
  min-height: 50px;
  overflow-y: hidden;
}

.add-features .form-control{
  width: 39% !important;
  height: 50px !important;
  margin-right: 1% !important;
  float: left;
}

.add-features .button{
  width: 20%;
  float: left;
  text-align: center;
}

.add-features  .btn{
  height: 50px !important;
  padding: 0px 10px !important;
  font-size: 13px !important;
  margin-top: 0px;
}
@media (max-width: 992px) {
  .platform-container, .rectangle{
    width: 96%;
    margin-left: 2%;
    margin-right: 2%;
    margin-bottom: 10px;
  }
  .add-features .form-control{
    margin-bottom: 10px;
  }
  .add-features .button{
    text-align: left;
  }
  .add-features .form-control, .add-features .button{
    width: 100% !important;
    margin-right: 0px important;
  }

  .features-holder{
    width: 100%;
    float: left;
  }
}
</style>
<script>
import QuoteDetails from '@/components/contents/QuoteDetails.vue'
import COMMON from '@/common.js'
import Jquery from 'jquery'
export default {
  mounted () {
    this.retrieve()
  },
  data () {
    return {
      platforms: [{
        icon: 'android', title: 'Android', selected: false
      }, {
        icon: 'apple', title: 'Apple, IoS', selected: false
      }, {
        icon: 'desktop', title: 'Web', selected: false
      }],
      titles: ['Choose your platform(s)', 'Details', 'Add your features'],
      projectType: null,
      activeStep: 1,
      features: [],
      newTitle: null,
      newDescription: null,
      errorAddFeature: null,
      data: {
        step1: [],
        step2: null,
        step3: []
      },
      email: null
    }
  },
  components: {
    QuoteDetails
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
      // let google = require('@/google.js')
      if (this.activeStep === 1) {
        this.validate1()
      }
      if (this.activeStep === 3) {
        this.validate3()
      }
      this.activeStep++
    },
    validate1 () {
      if (this.data.step1.length > 0) {
        this.data.step1 = []
      } else {
        //
      }
      for (var i = 0; i < this.platforms.length; i++) {
        if (this.platforms[i].selected === true) {
          this.data.step1.push(this.platforms[i].title)
        }
      }
    },
    validate2 (event) {
      this.email = event.email
      this.data.step2 = event
      this.next()
    },
    validate3 () {
      if (this.data.step3.length > 0) {
        this.data.step3 = []
      } else {
        //
      }
      for (var i = 0; i < this.features.length; i++) {
        if (this.features[i].select === true) {
          this.data.step3.push(this.features[i])
        }
      }
      this.create()
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
    },
    checkInput (params, event) {
      let content = null
      if (params === 'Title') {
        this.newTitle = event.target.value
        content = this.newTitle
      } else {
        this.newDescription = event.target.value
        content = this.newDescription
      }
      if (content === null || content === '' || (content !== null && content.length < 10)) {
        this.errorAddFeature = params + ' must not be empty or less than 10 characters'
      } else {
        this.errorAddFeature = null
      }
    },
    addFeature () {
      if (this.errorAddFeature === null && this.newTitle !== null && this.newDescription !== null) {
        let object = {
          title: this.newTitle,
          description: this.newDescription,
          select: true
        }
        this.features.push(object)
        this.newTitle = null
        this.newDescription = null
      } else {
        this.errorAddFeature = 'Please fill up the required information below.'
      }
    },
    retrieve () {
      let sheetUrl = 'https://spreadsheets.google.com/feeds/cells/1IMaYClh5HLbvgkW961a-PRLi3UCSV2ZCjsIa5nOeWwQ/1/public/values?alt=json'
      Jquery.get(sheetUrl, response => {
        let entries = response.feed.entry
        for (var i = 0; i < entries.length; i += 2) {
          if (i > 1) {
            let object = {
              title: entries[i].content.$t,
              description: entries[i + 1].content.$t,
              select: false
            }
            this.features.push(object)
          }
        }
      })
    },
    create () {
      // send to email
      let data = 'type=quotation&platforms=' + JSON.stringify(this.data.step1) + '&details=' + JSON.stringify(this.data.step2) + '&features=' + JSON.stringify(this.data.step3)
      Jquery.ajaxSetup({
        headers: {
          'Access-Control-Allow-Origin': '*'
        }
      })
      Jquery.get(COMMON.api + data, response => {
        this.$analytics.fbq.event('initialCheckout', {
          content_name: 'Contact'
        })
        console.log(response)
      })
    }
  }
}
</script>
