<template id="dbogdanoff-popup">
<div class="popup" :style="[popupStyle, overridingStyles]">
  <div class="popup__wrap">
    <div class="popup__close" @click="popupClose"><span>x</span></div>
    <div style="padding: 40px; max-width: 720px; font-size: 1.2rem">
      <slot></slot>
    </div>
  </div>
</div>
</template>

<script>
Vue.component('dbogdanoff-popup', {
  template: '#dbogdanoff-popup',
  props: {
    value: Boolean
  },
  data: function () {
    return {
      popupStyle: {
        display: 'none'
      }
    }
  },
  computed: {
    overridingStyles: function() {
      if (this.value === true) {
        return {
          display: 'flex',
          background: 'rgba(37, 80, 77, 0.76)'
        }
      }
    }
  },
  methods: {
    popupClose: function() {
      this.$emit('input', false)
    }
  }
})
</script>
