<template id="simple-block">
<div class="simple-block">
  <div v-bind:class="addClass" class="container text-center" data-aos="fade-up">
    <slot></slot>
  </div>
</div>
</template>

<script>
Vue.component('simple-block', {
  template: '#simple-block',
  props: {
    addClass: {
      type: String,
      default: ''
    }
  }
})
</script>

<style>
.simple-block {
  background: #576e353d;
}

.simple-block h5 {
  margin: 0;
}
</style>
