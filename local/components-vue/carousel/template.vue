<template id="carousel">
<div>
  <div class="container carousel mt-3 mb-5">
    <h3 class="text-center">Flickity</h3>
    <h5 class="text-center mb-4">Touch, responsive, flickable carousels</h5>
    <div class="carousel" ref="carousel">
      <div v-for="item in items" class="ml-2 mr-2 carousel-cell">
        <img v-bind:src="itemValue(item, 'src')" class="carousel__img" alt="">
      </div>
    </div>
  </div>
</div>
</template>

<script>
Vue.component('carousel', {
  template: '#carousel',
  props: {
    items: {
      default: function () { return {} },
      required: false
    }
  },
  mounted: function () {
    new Flickity(this.$refs.carousel, {
      wrapAround: true,
      imagesLoaded: true,
      percentPosition: false,
      prevNextButtons: false
    })
  },
  methods: {
    itemValue: function (item, prop) {
      return item.hasOwnProperty(prop) ? item[prop] : ''
    }
  }
})
</script>

<style>
.carousel__img {
  width: 270px;
}

.carousel .flickity-prev-next-button.previous {
  left: -35px;
}

.carousel .flickity-prev-next-button.next {
  right: -35px;
}
</style>
