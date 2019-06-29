<template>
    <div class="header-nightsky">
        <nav class="navbar navbar-default">
            <div class="container">
                <a class="navbar-brand" href="#">INCREMENT</a>
                <div class="navbar-header text-white">
                  <font-awesome-icon icon="bars" class="navbar-toggle hover-white menu-icon" data-toggle="collapse" data-target="#myNavbar" @click="show(true)" v-if="barFlag === false"></font-awesome-icon>
                  <font-awesome-icon icon="times" class="navbar-toggle hover-white menu-icon" data-toggle="collapse" data-target="#myNavbar" @click="show(false)" v-else></font-awesome-icon>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li v-for="(item, index) in menus" :key="index">
                            <a :href="item.payload">{{item.title}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <Tagline></Tagline>
        <Container></Container>
    </div>
</template>
<style lang="scss" scoped>
@import "~@/styles/colors.scss";
.container{
    max-width: 96% !important;
    padding-right: 0px !important;
    padding-left: 0px !important;
}
.hover-white:hover{
  cursor: pointer;
  color: $secondary;
}
body {
    font-family: 'Montserrat', sans-serif;
}

.header-nightsky {
    background:transparent;
    background-size: cover;
    background-position: bottom;
    padding-bottom: 100px;
}

.header-nightsky .navbar-nav>li>a {
    color: white;
    font-size: 18px;
    border-radius: 10px;
}

.header-nightsky .navbar {
    margin-bottom: 0px;
    padding-top: 20px;
    padding-bottom: 20px;
    width: 100%;
    border-bottom:none;
    background-color: $primary;
    min-width: 300px;
    border: none;
}

.header-nightsky .navbar-default .navbar-nav>.open>a,
.header-nightsky .navbar-default .navbar-nav>.open>a:focus,
.header-nightsky .navbar-default .navbar-nav>.open>a:hover {
    color: #ccc;
    background-color: transparent;
}

.header-nightsky .nav>li>a:focus,
.header-nightsky .nav>li>a:hover {
    color: #ccc;
    background-color: transparent;
}

.header-nightsky .navbar-nav>li {
    margin-right: 20px;
}

.header-nightsky .navbar-nav {
   margin-top: 12px;
}

.header-nightsky .navbar-toggle {
    background-color: transparent !important;
}

.header-nightsky .navbar-toggle .icon-bar {
    background-color: white;
}

.header-nightsky .navbar-brand {
    color: white;
    font-size: 42px;
    margin-top: 10px;
    margin-bottom: 10px;
}
.header-nightsky .navbar-collapse {
    border-top: none;
    box-shadow: none;
    height: 100%;
    z-index: 1;
    width: 100%;
    height: 100%;
    left: 0;
    top: 100px;
    position: absolute;
}

.header-nightsky .nav{
    width: 100%;
    font-size: 2.2rem;
    background: $primary;
}

.header-nightsky .nav li{
    width: 100%;
    float: left;
    padding-left: 5%;
}
.header-nightsky .nav li:hover{
    color: $tertiary !important;
}

.header-nightsky .navbar-brand:hover {
    color: #ccc;
}
.menu-icon{
    font-size: 42px;
}


@media screen and (max-width: 767px) {

  .header-nightsky .navbar-default .navbar-nav .open .dropdown-menu>li>a{
    color: white;
    font-size: 16px;
  }

  .header-nightsky .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover{
    color: $hover;
  }

  .header-nightsky .navbar-brand{
    font-size: 32px;
  }
  .container{
    max-width: 98% !important;
  }
  .menu-icon{
   font-size: 32px;
  }
}
</style>
<script>
import Tagline from '@/components/contents/Tagline.vue'
import Container from '@/components/frame/Container.vue'
export default {
  data () {
    return {
      barFlag: false,
      menus: [{
        title: 'HOME', payload: ''
      }, {
        title: 'SERVICES', payload: ''
      }, {
        title: 'PROCESS', payload: ''
      }, {
        title: 'VALUES', payload: ''
      }, {
        title: 'TESTIMONIALS', payload: ''
      }, {
        title: 'QUOTATION', payload: ''
      }, {
        title: 'CONTACT US', payload: ''
      }]
    }
  },
  components: {
    Tagline,
    Container
  },
  methods: {
    show (flag) {
        this.barFlag = flag
        // if(flag === false){
        //     $('.navbar-collapse').collapse('hide')
        // }else{
        //     $('.navbar-collapse').collapse('show')
        // }
    }
  }
}
</script>
