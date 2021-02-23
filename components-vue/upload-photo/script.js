Vue.component('upload-photo', {
  template: '#upload-photo',
  model: {
    prop: 'loader',
    event: 'change'
  },
  props: {
    loader: {
      type: Boolean,
      default: false
    }
  },
  data: function () {
    return {
      photo: ''
    }
  },
  methods: {
    changeFile: function() {
      this.readFile(this.$refs.photo.files[0])
    },
    readFile: function(file) {
      if (!file.type.match('image.*') || this.loader === true)
        return

      this.$emit('change', true)

      var reader = new FileReader(),
          $this = this

      reader.onload = (function () {
        return function (e) {
          var image = new Image()
          image.src = e.target.result
          image.onload = function () {
            $this.$emit('change', false)
            $this.photo = e.target.result
          }
        }
      })(file)

      reader.readAsDataURL(file)
    },
    getResult: function() {
      if (this.loader === true)
        return

      this.$emit('change', true)

      var $this = this

      axios.get('/api/upload/')
      .then(function (response) {
        $this.$emit('change', false)

        if (response.data.success !== true) {
          throw new Error(response.data.message)
        }
        else if (response.data.hasOwnProperty('message')) {
          alert(response.data.message)
        }
      })
      .catch(function (error) {
        $this.$emit('change', false)
        alert(error)
      })
    }
  }
})
