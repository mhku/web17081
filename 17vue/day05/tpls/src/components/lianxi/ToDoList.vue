<template>
  <ul>
   <h1>list</h1>
   <todoitem :key="index" :content='tmp' :myIndex="index" @deleteEvent='deleteFromList' v-for="(tmp,index) in lists"></todoitem>
  </ul>
</template>

<script>
import Todoitem from '@/components/lianxi/ToDoItem'

export default {
  components:{
    todoitem:Todoitem
  },
  props:['lists'],
  methods:{
    deleteFromList:function(index){
      this.lists.splice(index,1);
    }
  }
}
</script>

<style>

</style>
