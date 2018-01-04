<template>
  <div>
      <customHeader></customHeader>
      <h1>这是列表页面</h1>
      <ul>
          <li 
          v-bind:key="index" 
          v-for="(tmp,index) in newArrivalsList">
          <router-link :to="'/myDetail/'+index">
              {{tmp.name}}
          </router-link>
          </li>
      </ul>
      <button @click="handleClick">加载更多</button>
  </div>
</template>

<script>
    import MyHeader from '@/components/demos/header'
        export default{
        data:function(){
            return{
                newArrivalsList:[]
            }
        },
        methods:{
            handleClick:function(){
                // console.log("btn is clicked")
                // console.log(this.$http)
                this.$http.get('http://jsonplaceholder.typicode.com/users')
                .then(function(response){
                    // con,sole.log(response.data)
                    this.newArrivalsList=response.data
                })
            }
        },
        components:{
            customHeader:MyHeader
        }
    }
</script>

<style>

</style>
