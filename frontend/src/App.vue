<template>
  <div id="app">
    <MainPage msg="Welcome to Your Vue.js + TypeScript App"/>
  </div>
</template>

<script lang="ts">
import Vue from 'vue';
import MainPage from './components/MainPage.vue';

export default Vue.extend({
  name: 'App',
  components: {
    MainPage
  }
});
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

.no-caret button::after {
  visibility: hidden !important;
  /* display: none !important; */
}
</style>
