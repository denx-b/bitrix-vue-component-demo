<template id="upload-photo">
<div class="container p-5 upload-photo" data-aos="fade-right">
  <h3 class="text-center mb-4">Upload Your Photo</h3>
  <label class="text-center mx-auto d-flex align-items-center justify-content-center upload-photo__img" v-tooltip="'Используем v-tooltip'">
    <span v-if="!photo">Upload photo...</span>
    <img v-if="photo" v-bind:src="photo" alt="">
    <input v-on:change="changeFile()" type="file" ref="photo" hidden>
  </label>
  <div v-if="photo" class="text-center">
    <button v-on:click="getResult()" class="btn btn-primary">Upload</button>
  </div>
</div>
</template>
