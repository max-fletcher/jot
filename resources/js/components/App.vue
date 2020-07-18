<template>
  <div>
    <h1> Hello !! </h1>
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  props: {

  },
  components: {

  },
  data(){
    return{

    }
  },
  methods: {

  },
  mounted() {
      console.log('Component mounted.')
  },
}
</script>

<style scoped>

</style>
