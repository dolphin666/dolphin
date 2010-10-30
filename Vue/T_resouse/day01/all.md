今天学习的内容
1:复习昨天的内容
2:作业(上传头像)
3:今天目标
  3.1:Bootstrap JS插件 -- 轮播广告
     提示:轮播广告无需记忆,使用Bootlint提示
     <div class="carousel" data-ride="carousel">
        <div class="carousel-inner">
           <div class="item "></div>
           <div class="item active">img+.carousel-caption</div>
           <div class="item "></div>
           <div class="item "></div>
        </div>
     </div>

  3.2:Vue 框架
  3.3:什么是框架
     框架指一套非常优秀可被反复使用的代码.(软件半成品)
  3.4:框架优势
     (a)提高了代码的复用率
     (b)降低模块之间的耦合度(学子商城 耦合度高(密))
     (c)提高开发速度
     (d)提高代码质量
  3.5:what?
    Vue开发者是尤雨溪，是受到angular启发，是一个实现
    UI层的渐进式的js框架
    版本:v 2.5.1
  3.6:where
    饿了么,滴滴,阿里
  3.7:特点
     (1)非常好中文文档
     (2)体积小
     (3)基于组件(web component)开发方式
  3.8:how? 如何使用
     (a)下载对应vue.js文件，立即使在项目(学习)
     (b)vue 提供非常工具(vue-cli) 脚手架
       #安装软件nodejs
       #使用nodejs安装脚手架工具
        npm install --global vue_cli
       #创建一个基本脚手架工具项目 my-project
        vue init webpack my-project
       #安装依赖工具(联网安装)
        cd my-project
        npm install       #下载
        npm run dev      #启动项目

   3.9:概念
     vue.js 是当前一个js的 MVVM库，它以数据驱动和组件化的思想构造而成，比其它框架，简洁，上手快.

   3.10:什么是MVVM库


   MVVM(Model-View-ViewModel)
   *视图(View):    用户界面: (<div id="app"></div>)
   *模型(Model)   数据     (var obj = {msg:"hello"})
   *中间人(ViewModel)    view<-->model 纽带

   js+jq  项目(跑步js+自行车jq)
   vue.js     (自动档车)

  3.11:什么是MVVM库



 (1)vue实现挂载到某个元素上
 (2)当vue实现创建后，形成双向绑定
   上面dom listeners和data binding二个工具
 (3)从view侧看，vue中datalistener工具帮助我们监听dom变化
   如果dom变化更新model数据
 (4)如果从model侧看,当我们更新model数据,vue中的data bindings工具会
   帮我们更新view数据.

3.12:vue 开发基本流程
  (1)定义view
  (2)定义model
  (3)创建Vue实例(ViewModel)
    new Vue();它用于连接(view/model)
    创建vue实例，需要传入选项:
    数据      data:exampleData
    挂载元素  el:"#app"
    方法
    生命周期挂钩方法(钩子方法)
   (4) 将数据绑定view元素 一对大花括号写法{{message}}
     获取变量中值显示内容.

 3.13 vue.js 指令
 vue.js 指令以v-开头特性属性,它们作用html元素，指令提供一些特性,
 指定绑定元素产生不同行为.
 v-if
 v-show
 v-else
 v-for
 v-bind
 v-on
 基础指令:vue 具有良好扩展性，我们可以自定义指令.

 3.13 v-if 指令条件渲染指令，它根据表达式的true/false来删除或添加元素
 语法:
 v-if="expression"
 expression 是一个返回bool 值，表达式true/false
 删除意义:元素删除转换为注释

 3.14:v-show 也是条件渲染指令，和v-if 指令不同的，使用v-show指令元素始终会渲染到html,它只设备style属性:显示与隐藏
display:block{true}/display:none{false}

 3.15:v-else  指令
 v-else 指令必须跟一个v-if或v-show 元素后，否则不能够被识别.

  3.16:v-for  指令
 v-for 指令基于一个数组泻染,它语法与js遍历相似
 v-for="item in items"

 作业1:参考bootstrap 实例->模仿 “学子商城后台”
 作业2:学子商城后台-->[拥有角色]
 作业3:创建用户对象列表通过表格形式显示网页
