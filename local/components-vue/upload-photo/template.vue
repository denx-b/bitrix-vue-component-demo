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
