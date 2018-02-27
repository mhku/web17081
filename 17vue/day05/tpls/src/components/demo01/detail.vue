<template>
    <div>
        <h1>这是详情页面{{id}}</h1>
    </div>
</template>

<script>
   export default{
       data:function(){
            return {
               id:0     
            }
        },
       created:function(){
           this.id=this.$route.params.myId;
       }
   }
</script>

<style>
    
</style>