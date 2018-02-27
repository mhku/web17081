<template>
  <li>
   <h1>item</h1>
   <button @click="deleteItem">删除</button>
   <span>{{content}}</span>
  </li>
</template>

<script>
  export defalut{
    props:['content','myIndex'],
    methods:{
      deleteItem:function(){
        //删除todobox
        //this.$parent.lists.splice(0,1);
        this.$emit('deleteEvent',this.myIndex);
      }
    }
  }
</script>

<style>

</style>
