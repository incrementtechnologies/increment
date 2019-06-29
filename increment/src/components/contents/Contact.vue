<template>
  <div class="increment-wrapper">
    <h1 class="text-center" style="margin-top: 50px;">Contact Us</h1>
    <div class="platform-container">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Full Name"/>
      </div>
      <div class="form-group">
        <input type="email" class="form-control" placeholder="Email"/>
      </div>
      <div class="form-group">
        <textarea rows="7" placeholder="Projects details" class="form-control"></textarea>
      </div>
    </div>
    <div class="text-center buttons">
      <div class="btn btn-primary">SEND</div>
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
.increment-wrapper{
  background: transparent;
}
.platform-item{
  width: 100%;
  float: left;
}
.buttons{
  width: 100%;
  float: left;
  margin-top: 50px;
  margin-bottom: 50px;
}

.btn-primary {
  color: #fff;
  background-color: $primary;
  border-color: #fffbfb !important;
  outline:none;
  height: 50px;
  font-size: 24px;
  transition:0.2s background-color;
}

.btn-primary:hover{
  cursor: pointer;
} 
.btn-primary:active {
  transform:translateY(1px);
}

.form-control{
  min-height: 50px !important;
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
    }
  }
}
</script>
