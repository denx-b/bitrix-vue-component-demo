<template id="block-header">
<header class="header d-flex align-items-center">
  <div class="container text-center" data-aos="fade-up">
    <h1>Bitrix Vue Component</h1>
    <h3>Sample site</h3>
  </div>
</header>
</template>

<script>
Vue.component('block-header', {
  'template': '#block-header'
})
</script>

<style>
.header {
  background: linear-gradient(rgba(0, 0, 0, 0.25),rgba(0, 0, 0, 0.25)), url("/assets/bg-paraglider.jpg") center 80%;
  background-size: cover;
  height: 500px;
  color: white;
}
</style>
