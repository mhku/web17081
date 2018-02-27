<template>
  <ul>
   <h1>input</h1>
   <input type="text" v-model="myInput">
   <button></buttoon>
  </ul>
</template>

<script>
export detault{
  data:function(){
    return {
        myInput:''
      }
  },
  methods:{
    sendToFather:{
      this.$emit('addEvent',this.myInput);
    }
  }
}
</script>

<style>

</style>
