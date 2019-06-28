<template>
  <div>
    <Expertise></Expertise>
    <Values></Values>
    <Testimonials></Testimonials>
    <Quote></Quote>
    <ContactUs></ContactUs>
  </div>
</template>
<style lang="sass" scoped>
</style>
<script>
import Tagline from '@/components/contents/Tagline.vue'
import Expertise from '@/components/contents/Expertise.vue'
import Quote from '@/components/contents/Quote.vue'
import ContactUs from '@/components/contents/Contact.vue'
import Values from '@/components/contents/Values.vue'
import Testimonials from '@/components/contents/Testimonials.vue'
export default {
  components: {
    Tagline,
    Expertise,
    Quote,
    ContactUs,
    Values,
    Testimonials
  }
}
</script>
