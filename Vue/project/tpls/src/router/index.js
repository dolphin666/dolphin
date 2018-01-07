import Vue from 'vue'
import Router from 'vue-router'
import Hello from '@/components/Hello'
import productList from '@/components/demos/list'
import Details from '@/components/demos/detail'
//import ToDoBox from '@/components/lianxi/ToDoBox'
import todoBox from '@/components/lianxi2/ToDoBox'
import Login from '@/components/Login'
import Main from '@/components/Main'
import Chart from '@/components/Chart'
import ProductList from '@/components/ProductList'
import UserList from '@/components/UserList'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      component: Login
    },
    {
      path:'/login',component:Login
    },
    {
      path:'/main',component:Main,
      children:[
        {
          path:'/',
          component:Chart
        },
        {
          path:'/userList',
          component:UserList
        },
        {
          path:'/productList',
          component:ProductList
        }
      ]
    }
  ]
})
