<template id="upload-photo">
<div class="container p-5 upload-photo" data-aos="fade-right">
  <h3 class="text-center mb-4">Upload Your Photo</h3>
  <label class="text-center mx-auto d-flex align-items-center justify-content-center upload-photo__img">
    <span v-if="!photo">Upload photo...</span>
    <img v-if="photo" v-bind:src="photo" alt="">
    <input v-on:change="changeFile()" type="file" ref="photo" hidden>
  </label>
  <div v-if="photo" class="text-center">
    <button v-on:click="getResult()" class="btn btn-primary">Upload</button>
  </div>
</div>
</template>

<script>
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

      axios.get('/local/tools/ajax/fake-upload.php')
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
</script>

<style>
.upload-photo__img {
  width: 100%;
  max-width: 250px;
  min-height: 250px;
  border: 2px dashed;
  border-radius: 10px;
  cursor: pointer;
}

.upload-photo__img:hover {
  color: #9eafbf;
}

.upload-photo__img img {
  max-width: 100%;
  border-radius: 8px;
}
</style>
