<template>
  <div class="html-content-holder">
    <iframe :src="content"></iframe>
  </div>
</template>
<style lang="scss" scoped>
@import "~@/styles/colors.scss";
.html-content-holder{
  width: 299px;
  height: 100%;
  overflow: hidden;
}
iframe{
  width: 310px;
  height: 100%;
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
   overflow: auto;

}
/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px $tertiary;
  border-radius: 2px;
  margin-top: 20px;
  margin-bottom: 20px;
}
/* Handle */
::-webkit-scrollbar-thumb {
  background: $secondary;
  border-radius: 10px;
  height: 40px;
}
/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: $secondary;
}
@media screen and (max-width: 1030px) {
.html-content-holder{
  width: 300px;
  height: 100%;
  overflow: hidden;
  overflow-x: hidden;
}
iframe{
  width: 284px;
  height: 100%;
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
   overflow: auto;
    overflow-x: hidden;

}
}
@media screen and (max-width: 1344px) {
  .html-content-holder{
  width: 300px;
  height: 100%;
  overflow: hidden;
  overflow-x: hidden;
}
iframe{
  width: 320px;
  height: 100%;
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
   overflow: auto;
    overflow-x: hidden;

}
}
@media screen and (max-width: 1193px) {
  .html-content-holder{
  width: 299px;
  height: 100%;
  overflow: hidden;
  overflow-x: hidden;
}
iframe{
  width: 320px;
  height: 100%;
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
   overflow: auto;
    overflow-x: hidden;

}
}
</style>
<script>
export default {
  props: ['content']
}
</script>
