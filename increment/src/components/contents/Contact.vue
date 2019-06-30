<template>
  <div class="increment-wrapper" id="contact-us">
    <h1 class="text-center text-primary" style="margin-top: 50px;">Contact Us</h1>
    <div class="platform-container">
      <label v-if="validationFlag === true" class="text-danger">Opps! All fields are required.</label>
      <br>
      <div class="form-group">
        <label class="text-danger" v-if="contact.full_name !== null && contact.full_name.length < 5">Full name must be greater than 5 characters.</label>
        <input type="text" class="form-control" placeholder="Full Name" v-model="contact.full_name" v-bind:class="{'error-border': contact.full_name !== null && contact.full_name.length < 5, 'sucess-border': contact.full_name !== null && contact.full_name.length >= 5}"/>
      </div>
      <div class="form-group">
        <label class="text-danger" v-if="emailErrorFlag === true">Invalid email address.</label>
        <input type="email" class="form-control" v-bind:class="{'error-border': emailErrorFlag === true, 'sucess-border': emailErrorFlag === false}" placeholder="Email" v-on:input="emailInput" :value="contact.email"/>
      </div>
      <div class="form-group">
        <label class="text-danger" v-if="contact.details !== null && contact.details.length < 5">Details must be greater than 50 characters</label>
        <textarea rows="7" placeholder="Projects details" class="form-control" v-model="contact.details" v-bind:class="{'error-border': contact.details !== null && contact.details.length < 50, 'sucess-border': contact.details !== null && contact.details.length >= 50}"></textarea>
      </div>
    </div>
    <div class="text-center buttons">
      <div class="btn btn-primary" @click="submit()">SEND</div>
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
  background-color: $secondary;
  border-color: #fffbfb !important;
  outline:none;
  font-size: 24px;
  padding: 18px 24px;
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
.error-border{
  border: solid 1px $error;
}
.sucess-border{
  border: solid 1px $secondary;
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
      emailErrorFlag: null,
      contact: {
        full_name: null,
        email: null,
        details: null
      },
      validationFlag: false
    }
  },
  methods: {
    emailInput (event) {
      this.contact.email = event.target.value
      this.validateEmail()
    },
    validateEmail () {
      let reg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+.[a-zA-Z0-9]*$/
      if (reg.test(this.contact.email) === false) {
        this.emailErrorFlag = true
        return false
      } else {
        this.emailErrorFlag = false
        return true
      }
    },
    submit () {
      if (this.validateEmail() === false) {
        this.validationFlag = true
      }
      if ((this.contact.full_name !== null && this.contact.full_name.length < 5) || this.contact.full_name === null) {
        this.validationFlag = true
      }
      if ((this.contact.details !== null && this.contact.details.length < 5) || this.contact.details === null) {
        this.validationFlag = true
      } else {
        this.validationFlag = false
      }
    }
  }
}
</script>
