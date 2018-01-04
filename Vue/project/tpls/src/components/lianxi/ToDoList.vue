<template>
  <div>
    <ul>
      <todoitem :key="index" :myIndex="index" @deleteEvent="deleteFromList" :content="tmp" v-for="(tmp,index) in lists"></todoitem>
    </ul>
  </div>
</template>

<script>
  import ToDoItem from '@/components/lianxi/ToDoItem'

  export default{
  	components:{
  		todoitem:ToDoItem
    },
    props:['lists'],
    methods:{
  		deleteFromList:function (index) {
        this.lists.splice(index,1)
      }
    }
  }
</script>
