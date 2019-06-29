<template>
  <div class="increment-wrapper">
    <h1 class="text-center increment-title">What we can offer?</h1>
    <div class="wrapper-container">
      <span v-for="(item, index) in data" :key="index" class="wrapper-menu" v-bind:class="{'active-menu': activeIndex === index}" @click="setActive(item, index)">
        <font-awesome-icon :icon="item.icon" class="icon" v-if="item.icon !== null"></font-awesome-icon>
        <label><b>{{item.title}}</b></label>
      </span>
      <span class="menu-content" v-if="activeItem !== null">
        <span class="icon">
          <font-awesome-icon :icon="activeItem.icon"></font-awesome-icon>
        </span>
        <span class="content">
          <label><b>{{activeItem.title}}</b></label>
          <p>{{activeItem.description}}</p>
        </span>
      </span>
    </div>
  </div>
</template>
<style lang="scss" scoped>
@import "~@/styles/colors.scss";
.wrapper-container{
  width: 100%;
  float: left;
  margin-top: 50px;
  margin-bottom: 100px;
  padding:0px 10%;
}
h1{
  padding: 0px 10%;
  margin-top: 50px;
}
.wrapper-menu{
  width: 25%;
  float: left;
  height: 150px;
  text-align: center;
  color: $secondary;
  border-bottom: solid 4px $tertiary;
}
.wrapper-menu .icon{
  font-size: 50px;
  margin-top: 25px;
}
.wrapper-menu label{
  width: 100%;
  float: left;
  padding: 25px 0%;
  font-size: 1.5rem;
  margin-bottom: 0px;
}
.wrapper-menu label:hover{
  cursor: pointer;
}
.wrapper-menu p, .menu-content .content p{
  color: gray;
  font-size: 1rem;
}

.wrapper-menu:hover{
  cursor: pointer;
  background: $tertiary;
  color: white;
}
.menu-content{
  width: 100%;
  float: left;
  margin-top: 25px;
}

.menu-content .icon{
  font-size: 100px;
  width: 20%;
  float: left;
  text-align: center;
  color: $primary;
}
.menu-content .content{
  width: 80%;
  float: left;
}
.menu-content .content label{
  font-size: 1.5rem;
  color: $primary;
  width: 100%;
}

.active-menu{
  background: $tertiary;
  color: white;
}
@media (max-width: 992px) {
  .wrapper-container{
    margin-top: 50px;
    padding: 0% 2%;
  }

  h1{
    padding: 0px 5%;
  }
  .menu-content .content, .menu-content .icon{
    width: 100%;
  }
  .wrapper-menu label{
    font-size: 1rem;
  }
  .menu-content .content label{
    text-align: center;
  }
}
</style>
<script>
export default {
  mounted(){
    this.activeItem = this.data[0]
  },
  data () {
    return {
      data: [{
        icon: 'palette',
        title: 'DESIGN',
        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est '
      }, {
        icon: 'mobile-alt',
        title: 'APPS',
        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est '
      }, {
        icon: 'desktop',
        title: 'WEBSITES',
        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est '
      }, {
        icon: 'globe',
        title: 'HOSTING',
        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est '
      }],
      activeItem: null,
      activeIndex: 0
    }
  },
  methods: {
    setActive(item, index){
      this.activeItem = item
      this.activeIndex = index
    }
  }
}
</script>
