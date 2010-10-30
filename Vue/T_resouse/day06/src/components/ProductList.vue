<template>
  <div>
      <div class="right_col" role="main">
          <div class="row">
            <div class="col-xs-12 x_title">
              <h3>笔记本商品列表</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-3">
              <form class="form-inline">
                <div class="form-group">
                  <label for="page-size">每页显示记录数：</label>
                  <select class="form-control" id="page-size">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="40">40</option>
                    <option value="60">60</option>
                    <option value="80">80</option>
                    <option value="100">100</option>
                  </select>
                </div>
              </form>
            </div>
            <div class="col-xs-4 col-xs-offset-5">
              <div class="form-group has-feedback">
                <label for="product-kw" class="sr-only">搜索关键字：</label>
                <input class="form-control" type="text" id="product-kw" placeholder="请输入搜索关键字">
                <span class="glyphicon glyphicon-search form-control-feedback"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div class="table-responsive">
                <table class="table table-hover table-striped" id="table-laptop">
                  <thead>
                  <tr>
                    <th>
                      <div class="checkbox" style="margin: 0;">
                        <label>
                          <input type="checkbox">全选
                        </label>
                      </div>
                    </th>
                    <th>编号</th>
                    <th>图片</th>
                    <th>型号</th>
                    <th>主标题</th>
                    <th>规格</th>
                    <th>单价</th>
                    <th>操作</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr v-if="productList.length == 0">
                    <td colspan="8">
                      <div class="loading">
                        <img src="../assets/img/loading.gif" alt="">
                      </div>
                    </td>
                  </tr>

                   <tr v-for="detail in productList">
                      <td><input type="checkbox"></td>
                      <td>{{detail.lid}}</td>
                      <td><img class="pic" :src="require('../assets/'+detail.sm)"></td>
                      <td><p class="fname">{{detail.fname}}</p></td>
                      <td><p class="title">{{detail.title}}</p></td>
                      <td><p class="spec" >{{detail.spec}}</p></td>
                      <td>￥{{detail.price}}</td>
                      <td>
                        <a href="product_details.html">详情</a>
                        <a href="product_update.html">修改</a>
                        <a href="product_delete.html">删除</a>
                      </td>
                  </tr>

                  </tbody>
                </table>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <ul class="pagination pull-right" id="pagination">
                    <li><a @click="switchPage(false)">上一页</a></li>

                    <li  :class="{active:nowPage==(index+1)}" v-for="(tmp,index) in totalPagesList">
                      <a @click="loadDataByPage(tmp)">{{tmp}}</a>
                    </li>

                    <li><a @click="switchPage(true)">下一页</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <br>
        </div>
  </div>
</template>

<script>
  export default{
    data:function(){
      return {
        msg:'Hello ProductList',
	productList:[],  //保存数据列表
	totalPages:0,    //总页数
	totalPagesList:[],//存储页码
	nowPage:1         //当前页
      }
    },
    methods:{
        loadDataByPage:function(pno){
	  //1:发送ajax请求获取当前内容
	  var url = "http://127.0.0.1/html5/admin/data/04_product_list.php?pno=1";
	  this.$http.get(url).then(function(response){
	     //当前页内容
	     this.productList = response.data.data;
             //总页数
	     this.totalPages = response.data.pageCount;
	     //清空页码;再创建
	     this.totalPagesList=[];
	     for(var i=1;i<=this.totalPages;i++){
	        this.totalPagesList.push(i);
	     }
	     //当前页
             this.nowPage = response.data.pno;
	  });
	}
	,
	switchPage:function(rs){
	  //上一页 下一页

	}
    },
    mounted(){
        this.loadDataByPage(1);
    }
  }
</script>

<style>
  .pic{
    width:30px;
    height:auto
  }
</style>
