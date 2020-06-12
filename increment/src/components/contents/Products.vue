<template>
  <div class="project-wrapper" id="products">
    <h1 class="text-center text-primary">Projects</h1>
    <h2 class="text-center text-secondary">Our pleasure to work with our clients</h2>
    <div class="projects-container">
      <div class="projects-holder"  v-for="(item, index) in projects" :key="index" @click="redirect(item)">
        <div class="projects-image">
          <img :src="item.url">
          <div class="hover-holder">
            <font-awesome-icon :icon="faGlobe" class="icon"></font-awesome-icon>
            <i>Click to visit website.</i>
          </div>
        </div>
        <div class="projects-details">
          <label style="padding-top: 5px;"><b>{{item.title}} - {{item.country}}</b></label>
          <p>{{item.platform}}</p>
          <span style="padding-top: 5px;"><b>{{item.description}}</b></span>
        </div>
      </div>
    </div>
  </div>
</template>
<style lang="scss" scoped>
@import "~@/styles/colors.scss";
  .project-wrapper{
    width: 100%;
    float: left;
    background: white;
  }

  .projects-container{
    width: 90%;
    float: left;
    margin-right: 5%;
    margin-left: 5%;
  }

  .projects-holder{
    float: left;
    margin-right: 2%;
    border: solid 1px #fff;
    margin-bottom: 10px;
    margin-top: 0px;
    margin-bottom: 10px;
    margin-top: 25px;
    width: 23%;
  }
  .projects-holder:hover{
    cursor: pointer;
    border: solid 1px #ccc;
    .hover-holder{
      display: block;
    }
  }
  .projects-image{
    width: 100%;
    float: left;
    position: relative;
    text-align: center;
    min-height: 50px;
    overflow-y: hidden;
  }

  .projects-image img{
    height: auto;
    width: 100%;
  }

  .projects-details{
    min-height: 50px;
    width: 100%;
    float: left;
    overflow-y: hidden;
    background: $secondary;
  }

  .hover-holder{
    display: none;
    position: absolute;
    top: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.8);
    color: white;
    text-align: center;
    vertical-align: middle;
    width: 100%;
    height: 100%;
  }

  .icon{
    font-size: 36px;
    position: relative;
    top: calc(50% - 18px);
    width: 100%;
    float: left;
  }

  i{
    width: 100%;
    float: left;
    position: relative;
  }

  label, span{
    width: 100%;
    float: left;
  }

  p{
    padding-left: 10px;
    padding-right: 10px;
    margin: 0px;
    color: white;
  }

  label{
    line-height: 50px;
    color: white;
    padding-left: 10px;
    margin: 0px;
  }

  span{
    padding: 10px;
    min-height: 100px;
    overflow-y: hidden;
    color: white;
  }

@media (max-width: 992px) {
  .projects-container, .projects-holder{
    width: 98%;
    margin-right: 1%;
    margin-left: 1%;
  }
}
</style>
<script>
import IPhoneX from '@/components/devices/IPhoneX.vue'
import COMMON from '@/common.js'
import Jquery from 'jquery'
import { faGlobe } from '@fortawesome/free-solid-svg-icons'
export default {
  mounted () {
    this.retrieve()
  },
  data () {
    return {
      projects: [],
      activeIndex: 1,
      forwardFlag: true,
      faGlobe: faGlobe
    }
  },
  components: {
    IPhoneX
  },
  methods: {
    redirect (item) {
      if (item.description !== 'Confidential') {
        window.open(item.link, '_BLANK')
      }
    },
    retrieve () {
      let sheetUrl = 'https://spreadsheets.google.com/feeds/cells/1IMaYClh5HLbvgkW961a-PRLi3UCSV2ZCjsIa5nOeWwQ/5/public/values?alt=json'
      Jquery.get(sheetUrl, response => {
        let entries = response.feed.entry
        for (var i = 0; i < entries.length; i += 6) {
          if (i > 5) {
            let object = {
              title: entries[i].content.$t,
              description: entries[i + 1].content.$t,
              url: COMMON.host + '/static/img/' + entries[i + 2].content.$t,
              platform: entries[i + 3].content.$t,
              link: entries[i + 4].content.$t,
              country: entries[i + 5].content.$t
            }
            this.projects.push(object)
          }
        }
      })
    }
  }
}
</script>
