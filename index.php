<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Bitrix Vue Component');
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
  <carousel v-bind:items="sliderItems"></carousel>
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
      loader: false,
      sliderItems: [
        {
          src: '/assets/slider/1.jpg'
        },
        {
          src: '/assets/slider/2.jpg'
        },
        {
          src: '/assets/slider/3.jpg'
        },
        {
          src: '/assets/slider/4.jpg'
        },
        {
          src: '/assets/slider/5.jpg'
        }
      ]
    }
  },
  mounted: function () {
    AOS.init()
  }
})
</script>

<? require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>
