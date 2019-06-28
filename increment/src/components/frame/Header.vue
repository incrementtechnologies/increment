<template>
    <div class="header-nightsky">
        <nav class="navbar navbar-default sticky-top">
            <div class="container">
                <a class="navbar-brand" href="#">INCREMENT</a>
                <div class="navbar-header text-white">
                  <font-awesome-icon icon="bars" style="font-size: 42px;" class="navbar-toggle hover-white" data-toggle="collapse" data-target="#myNavbar" @click="barFlag = true" v-if="barFlag === false"></font-awesome-icon>
                  <font-awesome-icon icon="times" style="font-size: 42px;" class="navbar-toggle hover-white" data-toggle="collapse" data-target="#myNavbar" @click="barFlag = false" v-else></font-awesome-icon>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">HOME</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">NEWS <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Page 1-1</a></li>
                                <li><a href="#">Page 1-2</a></li>
                                <li><a href="#">Page 1-3</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">FEATURES <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Page 1-1</a></li>
                                <li><a href="#">Page 1-2</a></li>
                                <li><a href="#">Page 1-3</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">DEMOS<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Page 1-1</a></li>
                                <li><a href="#">Page 1-2</a></li>
                                <li><a href="#">Page 1-3</a></li>
                            </ul>
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
    font-size: 50px;
    margin-top: 10px;
    margin-bottom: 10px;
}

.header-nightsky .navbar-brand:hover {
    color: #ccc;
}

@media screen and (max-width: 767px) {

  .header-nightsky .navbar-default .navbar-nav .open .dropdown-menu>li>a{
    color: white;
    font-size: 16px;
  }

  .header-nightsky .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover{
    color: $hover;
  }

  .header-nightsky .navbar-collapse {
    margin-left: 20px;
    border-top: none;
    box-shadow: none;
  }
}
</style>
<script>
import Tagline from '@/components/contents/Tagline.vue'
import Container from '@/components/frame/Container.vue'
export default {
  data () {
    return {
      barFlag: false
    }
  },
  components: {
    Tagline,
    Container
  },
  methods: {
    test () {
    }
  }
}
</script>
