<template>
  <div>
   <h1>box</h1>
   <todoinput @addEvent="addToList"></todoinput>
   <todoList :lists="myList"></todoList>
   
  </div>
</template>

<script>
import Todolist from '@/components/lianxi/ToDoList'
import Todoinput from '@/components/lianxi/ToDoInput'

export default {
  components:{
    todoList:Todolist,
    todoinput:Todoinput
  },
  methods:{
    addToList:function(msg){
      console.log(msg);
      this.myList.push(msg);
    }
  }
}
</script>

<style>

</style>
