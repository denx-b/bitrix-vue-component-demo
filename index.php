<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Bitrix Vue Component');
?>

<?php
\Dbogdanoff\Bitrix\Vue::includeComponent([
    'block-header',
    'block-footer',
    'simple-block',
    'upload-photo',
    'carousel',
    'dbogdanoff-loader'
]);
?>

<main id="app" v-cloak>
  <block-header></block-header>
  <carousel></carousel>
  <simple-block add-class="p-5">
    <h5>Text block</h5>
  </simple-block>
  <upload-photo v-model="loader"></upload-photo>
  <simple-block add-class="p-5">
    <h5>Second text block</h5>
  </simple-block>
  <block-footer></block-footer>
  <dbogdanoff-loader v-bind:active="loader" v-bind:replace="true"></dbogdanoff-loader>
</main>

<script>
var mainVueApp = new Vue({
  el: '#app',
  name: 'root',
  data: function () {
    return {
      loader: false
    }
  },
  mounted: function () {
    AOS.init();
    Vue.use(VTooltip)
  }
})
</script>

<style>
[v-cloak] {
  display: none;
}
</style>

<? require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>
