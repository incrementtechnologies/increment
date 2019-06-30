<template>
  <div class="increment-wrapper" id="products" v-bind:class="{'one': activeIndex === 1, 'two': activeIndex === 2, 'three': activeIndex === 3}">
    <h1 class="text-center increment-title text-primary">What we provide?</h1>
    <h2 class="text-center text-secondary">Our Products</h2>
    <div class="platform-container">
      <div v-for="(item, index) in products" :key="index">
        <div class="product-holder" v-if="activeIndex === (index + 1)">
          <span class="details" v-if="item.align === 'left'">
            <div class="description">
              <h3 class="text-white text-center">{{item.app}}</h3>
              <h2 class="text-white">{{item.tagline}}</h2>
              <p class="text-white"><i>{{item.description}}</i></p>
            </div>
            <div class="text-center">
              <a :href="item.website" target="_BLANK">
                <button class="btn btn-primary" style="margin-top: 25px;">Learn more</button>
              </a>
            </div>
          </span>
          <span class="details devices">
            <span class="right" v-if="item.align === 'left'">
              <IPhoneX :content="item.website"></IPhoneX>
            </span>
            <span class="left" v-if="item.align === 'right'">
              <IPhoneX :content="item.website"></IPhoneX>
            </span>
          </span>
          <span class="details" v-if="item.align === 'right'">
            <div class="description">
              <h3 class="text-white text-center">{{item.app}}</h3>
              <h2 class="text-white">{{item.tagline}}</h2>
              <p class="text-white"><i>{{item.description}}</i></p>
            </div>
            <div class="text-center">
              <a :href="item.website" target="_BLANK">
                <button class="btn btn-primary" style="margin-top: 25px;">Learn more</button>
              </a>
            </div>
          </span>
        </div>
      </div>
      <span class="arrow-icons text-primary">
        <font-awesome-icon icon="chevron-left" class="arrow-left" v-if="activeIndex > 1" @click="previous()"></font-awesome-icon>
        <font-awesome-icon icon="chevron-right" class="arrow-right" v-if="activeIndex < products.length" @click="next()"></font-awesome-icon>
      </span>
      <span class="circle-icons">
        <font-awesome-icon icon="circle" v-for="item in products.length" :key="item" class="icon" v-bind:class="{'text-tertiary': activeIndex === item, 'text-white': activeIndex !== item}"></font-awesome-icon>
      </span>
    </div>
  </div>
</template>
<style lang="scss" scoped>
@import "~@/styles/colors.scss";
.increment-wrapper{
  background-repeat: no-repeat;
}
.one{
  background-image: url('~@/assets/print.jpg');
  background-size: 100%;
}
.two{
  background-image: url('~@/assets/payhiram.jpg');
  background-size: 100% auto;
}
.three{
  background-image: url('~@/assets/bot.jpg');
  background-size: 100% auto;
}
.platform-container{
  width: 100%;
  float: left;
  margin-top: 50px;
  margin-bottom: 50px;
  position: relative;
  min-height: 80vh;
  overflow-y: hidden;
}
.arrow-icons{
  position: absolute;
  top: 30%;
  width: 100%;
  z-index: 1;
  padding: 0% 5%;
  font-size: 50px;
}
.arrow-icons .arrow-left{
  float: left;
}
.arrow-icons .arrow-right{
  float: right;
}
.arrow-left:hover, .arrow-right:hover{
  cursor: pointer;
  color: $tertiary;
}
.increment-title{
  margin-top: 50px;
}
.product-holder{
  height: auto;
  width: 80%;
  margin-left: 10%;
  margin-right: 10%;
  margin-bottom: 50px;
  position: absolute;
}
.product-holder .description{
  background: rgba(0, 0, 0, 0.5);
  padding: 10px;
}
.description p{
  text-align: justify;
}
.product-holder .details{
  width: 50%;
  float: left;
  height: 100%;
}
.circle-icons{
  position: absolute;
  width: 100%;
  text-align: center;
  height: 50px;
  top: 95%;
}
.circle-icons .icon{
  padding-right: 2px;
  padding-left: 2px;
  font-size: 24px;
}
.circle-icons .icon:hover{
  cursor: pointer;
  color: $primary;
}
.left{
  height: 400px;
  width: 220px;
  float: left;
  margin-left: 5%;
}
.right{
  height: 400px;
  width: 220px;
  float: right;
  margin-right: 5%;
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
@media (max-width: 992px) {
  .platform-container{
    margin-top: 50px;
  }
  .product-holder{
    width: 98%;
    margin-right: 1%;
    margin-left: 1%;
  }
  .product-holder .details {
    width: 100%;
  }
  .one, .two, .three{
    background-size: auto 100%;
  }
  .devices{
    display: none;
  }
}
</style>
<script>
import IPhoneX from '@/components/devices/IPhoneX.vue'
export default {
  mounted () {
    setInterval(() => {
      if (this.forwardFlag === true) {
        this.next()
      } else {
        this.previous()
      }
    }, 4000)
  },
  data () {
    return {
      products: [{
        tagline: 'Connecting you to nearby printing.',
        description: 'PaPrint lets you design and create custom professional-looking printing templates. Connecting to printing partners a lot easier.',
        logo: null,
        app: 'PaPrint',
        url: null,
        align: 'left',
        website: 'http://idfactory.ph'
      }, {
        tagline: 'Quick Loans. Transparent Investment.',
        description: 'Making small amount of loans processes a lot easier. Want to make an investment also? PayHiram provides you a tool for investment with transparent transactions.',
        logo: null,
        app: 'PayHiram',
        url: null,
        align: 'right',
        website: 'http://payhiram.com'
      }, {
        tagline: 'Making a customizable messenger bot.',
        description: 'We build customize chatbot application for facebook messenger, whatsapp and more.',
        logo: null,
        app: 'iLinya',
        url: null,
        align: 'left',
        website: 'http://ilinya.com'
      }],
      activeIndex: 1,
      forwardFlag: true
    }
  },
  components: {
    IPhoneX
  },
  methods: {
    previous () {
      if (this.activeIndex > 1) {
        this.activeIndex--
        this.forwardFlag = false
      } else {
        this.forwardFlag = true
      }
    },
    next () {
      if (this.activeIndex < this.products.length) {
        this.activeIndex++
        this.forwardFlag = true
      } else {
        this.forwardFlag = false
      }
    }
  }
}
</script>
