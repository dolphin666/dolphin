<template>
  <div>
    <h1>
      TODOBOX
    </h1>
    <todoinput @addEvent="addToList"></todoinput>
    <todolist :lists="myList"></todolist>
  </div>
</template>

<script>
  import ToDoList from '@/components/lianxi/ToDoList'
  import ToDoInput from '@/components/lianxi/ToDoInput'
  export default{
    components:{
      todolist:ToDoList,
      todoinput:ToDoInput
    },
    data:function () {
      return{
      	myList:[]
      }
    },
    methods:{
    	addToList:function (msg) {
        console.log(msg);
        this.myList.push(msg);
      }
    }
  }
</script>

<style>

</style>
