<template>
  <div>
    <h1>
      待做事项列表
    </h1>
  </div>
</template>

<script>
  import ToDoList from '@/components/lianxi/ToDoList'
  import ToDoInput from '@/components/lianxi/ToDoInput'
  export default{
    components:{
      todolist:ToDoList,
      todoinput:ToDoInput
    }
  }
</script>

<style>

</style>
