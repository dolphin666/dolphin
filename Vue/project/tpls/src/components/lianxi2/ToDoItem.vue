<template>
  <div>
    <button @click="deleteItem">delete</button>
    <span>{{content}}</span>
  </div>
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
