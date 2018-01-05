<template>
  <ul>
    <todoitem :key="index" v-for="(tmp,index) in lists" :content="tmp" :myIndex="index" @deleteEvent="fromDeleteList"></todoitem>
  </ul>
</template>
<script>
  import todoitem from "@/components/lianxi2/ToDoItem"

  export default{
    components: {
      todoitem: todoitem
    },
    props: ['lists'],
    methods:{
    	fromDeleteList:function (index) {
        this.lists.splice(index,1);
      }
    }
  }
</script>
