<template>
  <div>
    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form>
            <h1>管理员登录</h1>
            <div>
              <input type="text" class="form-control" placeholder="管理员登录名" v-model="userName" required/>
            </div>
            <div>
              <input type="password" class="form-control" placeholder="管理员登录密码" v-model="userPwd" required/>
            </div>
            <div>
              <a class="btn btn-default submit" @click="doLogin">&nbsp;登&nbsp;录&nbsp;</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <div class="clearfix"></div>
              <br/>

              <div>
                <h1><img src="../assets/img/favicon.ico"></i> 学子商城后台管理系统</h1>
                <p>©2017 版权所有，CODEBOY.COM</p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    data: function () {
      return {
        userName: '',
        userPwd: ''
      }
    },
    methods:{
      doLogin:function () {
        //向客户端发请求 验证 用户名和密码
        //前提：VueResource 可用
        this.$http.get('http://localhost/admin/data/user/login.php?uname='+this.userName+'&upwd='+this.userPwd).then(function (response) {
          console.log(response.data);
          if(response.data.code==200){
            //跳转到主页面main.vue
            this.$router.push('/main')
          }
        })
      }
    }
  }
</script>
