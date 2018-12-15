Vue.component('dbogdanoff-loader', {
  props: {
    active: {
      type: Boolean,
      default: false
    },
    replace: {
      type: Boolean,
      default: false
    }
  },
  template: '' +
    '<div v-bind:class="{ \'dbogdanoff-loader--showed\': active }" class="dbogdanoff-loader">' +
    '<img class="dbogdanoff-loader__icon" v-bind:src="src" width="166" height="166" alt="">' +
    '</div>',
  computed: {
    src: function () {
      return this.$bx.componentsPath + '/' + this.$options.name + '/images/load-double-ring.svg'
    }
  },
  mounted: function () {
    if (window.hasOwnProperty('BX') && window.hasOwnProperty('mainVueApp') && this.replace === true) {
      BX.showWait = function () {
        mainVueApp.loader = true
      }
      BX.closeWait = function () {
        mainVueApp.loader = false
      }
    }
  }
})
