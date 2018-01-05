<template>
  <div>
    <todoinput @addEvent="addToList"></todoinput>
    <todolist :lists="addList"></todolist>
  </div>
</template>
<script>
  import todoinput from '@/components/lianxi2/ToDoInput'
  import todolist from '@/components/lianxi2/ToDoList'

  export default{
    components:{
    	todoinput:todoinput,
      todolist:todolist
    },
  data:function () {
    return{
    	addList:[]
    }
  },
    methods:{
    	addToList:function (msg) {
        this.addList.push(msg);
        console.log(this.addList);
      }
    }

  }
</script>
