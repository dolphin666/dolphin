import Vue from 'vue'
import Router from 'vue-router'
import Hello from '@/components/Hello'
import productList from '@/components/demos/list'
import Details from '@/components/demos/detail'
import ToDoBox from '@/components/lianxi/ToDoBox'
import ToDoInput from '@/components/lianxi/ToDoInput'
import ToDoList from '@/components/lianxi/ToDoList'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Hello',
      component: Hello
    },
    {
      path:'/myList',component:productList
    },
    {
      path:'/myDetail/:myId',component:Details
    },
    {
      path:'/todoBox',component:ToDoBox
    },
    {
      path:'/todoinput',component:ToDoInput
    },
    {
      path:'/todolist',component:ToDoList
    } 
  ]
})
