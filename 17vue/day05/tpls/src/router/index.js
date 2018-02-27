import Vue from 'vue'
import Router from 'vue-router'
import Hello from '@/components/Hello'
// import List from '@/components/demo01/list'
// import Detail from '@/components/demo01/detail'
import Todobox from '@/components/lianxi/ToDoBox'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Hello',
      component: Hello
    },
    {
      path: '/dobox',
      component: Todobox
     }//,
    // {
    //   path:'/dolist',
    //   components: Todolist
    // },
    // {
    //   path:'/doinput',
    //   components: Todoinput
    // },
    // {
    //   path:'/doitem',
    //   components:Todoitem
    // }
  ]
})
