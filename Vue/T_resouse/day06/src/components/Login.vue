<template>
  <div class="login">
     <div class="login_wrapper">
          <div class="animate form login_form">
            <section class="login_content">
              <form>
                <h1>管理员登录</h1>
                <div>
                  <input type="text" class="form-control" placeholder="管理员登录名" required  v-model="uName"/>
                </div>
                <div>
                  <input type="password" class="form-control" placeholder="管理员登录密码" required  v-model="uPwd"/>
                </div>
                <div>
                  <a class="btn btn-default submit" @click="loginToIndex">&nbsp;登&nbsp;录&nbsp;</a>

                </div>

                <div class="clearfix"></div>

                <div class="separator">
                  <div class="clearfix"></div>
                  <br />


                  <div>
                    <h1><img src="assets/img/favicon.ico" /></i> 学子商城后台管理系统</h1>
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
  export default{
    data:function(){
      return {
        msg:'Hello Login',
	uName:"",          //绑定用户名
	uPwd:""            //绑定密码
      }
    },
    methods:{
       loginToIndex:function(){
          //1:获取用户名和密码
	  var n = this.uName;
	  var p = this.uPwd;
	  //2:发送ajax请求
	  var url = "http://127.0.0.1/";
	  url += "html5/admin/data/01_login.php";
	  url += `?uname=${n}&upwd=${p}`;

	  this.$http.get(url).then(function(data){
	     if(data.body.code > 0){
	        this.$router.push("/list");
	     }else{
	        alert(data.body.msg);
	     }
	  });
	  //3:获取返回数据  15:35--15:50
	  //4:判断如果登录  跳转/list
       }
    }
  }
</script>

<style></style>
