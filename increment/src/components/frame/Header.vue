<template>
    <div class="header-nightsky">
        <nav class="navbar navbar-default">
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
        <div class="hero">
            <h1>Your Success is our Success.</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut tempor enim.</p>
            <div class="btn btn-primary">Learn more about us</div>
            <div class="btn btn-primary">Contact us</div>
        </div>
    </div>
</template>
<style lang="scss" scoped>
$primary: #3f0050;
$hover: #ccc;
$secondary: #22b173;
.hover-white:hover{
  cursor: pointer;
  color: $secondary;
}
body {
    font-family: 'Montserrat', sans-serif;
}

.header-nightsky {
    color: white;
    background:$primary;
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
    background-color: transparent;
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

.header-nightsky .hero {
    text-align: center;
    margin-top: 80px;
    margin-bottom: 100px;
}

.header-nightsky .hero h1 {
    color: white;
    font-weight: bold;
    font-size: 60px;
    margin-bottom: 36px;
}

.header-nightsky .hero p {
    color: rgba(255, 255, 255, 0.6);
    font-size: 22px;
    max-width: 660px;
    margin: 0 auto 20px;
    font-weight: normal;
    line-height: 1.5;
}

.header-nightsky .btn-primary {
    color: #fff;
    background-color: transparent;
    border-color: #fffbfb !important;
    outline:none;
    margin-right: 20px;
    margin-top: 20px;
    font-size: 24px;
    padding: 18px 24px;
    transition:0.2s background-color;
}

.header-nightsky .btn-primary:hover {
    background-color:rgba(255,255,255,0.1);
}

.header-nightsky .btn-primary:active {
    transform:translateY(1px);
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
  
    .header-nightsky .hero{
        margin-top: 40px;
        margin-bottom: 40px;
    }

    .header-nightsky .hero h1{
        font-size: 42px;
    }
}
</style>
<script>
export default {
  data () {
    return {
      barFlag: false
    }
  },
  methods: {
    test () {
    }
  }
}
</script>
