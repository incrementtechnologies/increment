<template>
  <div class="hero">
    <h1>WE WANT YOU TO SUCCEED</h1>
    <p>
      We create beautiful and secured websites, and mobile applications. Just relax and we will give solutions to your needs. Got something awesome for us to work on?
    </p>
    <div class="btn btn-primary">GET QUOTE NOW!</div>
  </div>
</template>
<style lang="scss" scoped>
.hero {
  text-align: center;
  margin-top: 80px;
  margin-bottom: 100px;
}

.hero h1 {
  color: white;
  font-weight: bold;
  font-size: 60px;
  margin-bottom: 36px;
}

.hero p {
  color: rgba(255, 255, 255, 0.6);
  font-size: 22px;
  max-width: 660px;
  margin: 0 auto 20px;
  font-weight: normal;
  line-height: 1.5;
}
.btn-primary {
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

.btn-primary:hover {
  background-color:rgba(255,255,255,0.1);
}

.btn-primary:active {
  transform:translateY(1px);
}

@media screen and (max-width: 767px) {
  .hero{
    margin-top: 40px;
    margin-bottom: 40px;
  }

  .hero h1{
    font-size: 42px;
  }
}
</style>
<script>
export default {
}
</script>
