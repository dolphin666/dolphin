<template>
  <div>
    <h1>待做事项列表</h1>
    <input type="text" v-model="myInput">
    <button @click="sendToFather">add</button>
  </div>

</template>

<script>
  export default{
    data: function () {
      return {
        myInput: ''
      }
    },
    methods:{
    	sendToFather:function () {
        this.$emit('addEvent',this.myInput);
        this.myInput='';
      }
    }
  }
</script>
