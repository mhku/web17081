<template>
    <div>
        <customHeader></customHeader>
        <h1>这是列表页面</h1>
        <ul>
            <li b-bind:key="index" v-for="(tmp,index) in newArrivalsList" >
                <router-link :to="'/myDetail/'+index">
                    {{tmp.name}}
                </router-link>
            </li>
        </ul>
        <button @click="handleClick">加载更多
            
        </button>
    </div>
</template>

<script>
    import Myheader from '@/components/demo01/header'
    export default{
        data:function(){
            return {
                newArrivalsList:[1,2,3,4,4]    
            }
        },
        methods:{
            handleClick:function(){
                console.log("btn is clicked");
                console.log(this.$http);
                this.$http.get("http://jsonplaceholder.typicode.com/users").then(function(response){
                    console.log(response.data);
                    this.newArrivalsList=response.data;
                })
            }
        },
        components:{
            customHeader:Myheader
        }
    }
</script>

<style>

</style>