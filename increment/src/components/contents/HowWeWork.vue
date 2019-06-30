<template>
  <div class="increment-wrapper">
    <h1 class="text-center increment-title text-tertiary">Here's how we work, from your projects, from start to finish</h1>
    <div class="wrapper-container">
      <span v-for="(item, index) in data" :key="index">
        <label><b>{{item.title}}</b></label>
        <p>{{item.description}}</p>
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

.wrapper-container label{
  width: 100%;
  float: left;
  padding: 25px 0%;
  color: $secondary;
  font-size: 1.5rem;
  margin-bottom: 0px;
}
.wrapper-container p{
  color: gray;
  font-size: 1rem;
}
@media (max-width: 992px) {
  .wrapper-container{
    margin-top: 50px;
    padding: 0%  2%;
  }

  h1{
    padding: 0px 2%;
  }
}
</style>
<script>
export default {
  data () {
    return {
      data: [{
        title: 'MEET AND GREET',
        description: 'To get a new project underway we like to meet our clients face-to-face for a chat. Our initial meeting will identify your objectives and decipher exactly how we can help. Think of this as a fact find with us asking you the important questions.'
      }, {
        title: 'PLANNING',
        description: 'Our planning session provides us with a comprehensive strategy for your project. This crucial phase will form the building blocks of your project, helping us to investigate and identify drivers from across your business’ people, customers, processes and technology that will lead to more successful outcomes.'
      }, {
        title: 'DESIGN UI AND UX',
        description: 'Stunning, intuitive design is essential to your product’s functionality and brand story. Our design team’s diverse expertise will guide the innovative choices that will make sure your brand is communicated effectively and delights users. The designs will be created as PSD Photoshop files, allowing you to see exactly what they will look like.'
      }, {
        title: 'DESIGN PRESENTATION',
        description: 'We use Invision software to present interactive designs. This allows us to give an exact depiction of what your final product will look like. We will cover every detail down to the shading on a line before commencing with development.'
      }, {
        title: 'DEVELOPMENT',
        description: 'We create scalable, high-performance mobile apps for iOS, Android and Web using the latest techniques and tools. Our developers are forward-thinking specialists who will integrate seamlessly into your project and deliver outstanding native experiences.'
      }, {
        title: 'TESTING AND QUALITY ASSURANCE',
        description: 'Our dedicated in-house QA department executes thorough and complex testing processes depending on the scope of your project. The goal is to make sure that every line of code, pixel on the screen and interaction with your app is perfect.'
      }, {
        title: 'DELIVERY',
        description: 'Once perfected, we begin the process of migrating your project from a testing to live environment. All source code files are sent to you, and we prepare for launch.'
      }, {
        title: 'LAUNCHING',
        description: 'This is where the final solution is pieced together, built to meet all your requirements in a timely manner. We establish real relationships with all of our clients to support the excitement around releasing your vision to the market.'
      }, {
        title: 'MARKETING',
        description: 'Product development is only half the battle. Through multiple tools, plans and strategies, our marketing team makes sure your app is embraced by your target market right from the get-go.'
      }, {
        title: 'MAINTENANCE & IMPROVEMENTS',
        description: 'Technology is constantly evolving, so we continuously build to ensure your product meets the ever changing demands of your user base. Our team monitors your cloud servers, storage, databases, and more so you can stay ahead of the curve.'
      }]
    }
  }
}
</script>
