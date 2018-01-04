<template>
  <li>
    <button @click="deleteItem">delete</button>
    <span>{{content}}</span>
  </li>
</template>

<script>
  export default{
  	props:['content','myIndex'],
    methods:{
  		deleteItem:function () {
        this.$emit('deleteEvent',this.myIndex)
      }
    }
  }
</script>
