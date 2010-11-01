今天学习的内容
1:复习昨天知识重点
2:作业
3:今天的目标
   3.1: Vue 指令----(重点)
   3.2: Vue 指令----v-bind指令
   v-bind指令后带一个参数,中间放一个冒号分，这个参数通常html特性
   语法:
    v-bind:argumetns="expression"
   示例:
    <img v-bind:src="imgUrl" />
    <p  v-bind:style="{backgroundColor:myBg}" />

    练习:分页条 [1] [2] [3]...[10]    ul>li    14:45--14:55
    数据:pageCount:10;
         activeNumber:3;
    提示 .active{color:red}
    注意事项:
    a:表达式中直接单词解析变量
    b:如果字符串单引号


    3.3: Vue 指令----v-on指令用于监听dom事件,用法与上面指相似
    表法:<a v-on:click="回调方法名"></a>
         <a v-on:click.stop="回调方法名"></a>
    .stop    停止事件冒泡
    .prevent 阻止事件默认行为
    .13 .enter 只当前事件触发时才回调
    .once     只触发一次
    .left      鼠标左键时触发(2.2.0)
    .right     鼠标右键时触发(2.2.0)
    .middle   鼠标中键(2.2.0)

   练习:分页15:50--15:55
   上一页  [1][2][3]..[10]   下一页
   pageCount:10
   activeNumber:3

   练习:综合数据列表 16:30---16:40
   (1)输入框 [james ]
   (2)循环数据列表
    <li>tom <button>X(3)</button></li>
    <li>jerry <button>X</button></li>
  提示:
   (1)按回添加数据
   (2)点击X删除当前行数据

  3.3: Vue 指令----v-model指令用于与当前元素绑定,value值
  表法:<input type="text" v-mode="变量" />
  注意事项:
  v-mode.lazy="变量"     #懒惰回车,onblur触发
  v-mode.number="变量"  #输入数值
  v-mode.trim="变量"     #去除字符串前后空格

  3.4: Vue 自定义指令
  Vue自带的指令很多: v-for/v-else/v-if....
  但是这些指令比较偏向工具化,有些时候需要具体业务功能,
  发现不够用,可以自定义指令.


  3.5: Vue 自定义指令创建
  (1)创建Vue 添加指令
  new Vue({
    el:
    data:
    directives:{               //自定义指令
        change:{            //指令名称   v-change
         bind:function(){},    //bind:指令绑定到元素
         update:function(){},  //如果调用指令，传参数，参数变化
         unbind:function(){}  //解除绑定的操作
        }
    }
  });



  3.x: Vue 组件----(重点&难点)

   作业1:仿照todo数据列示例
   用户名[ ]
   年龄[   ]
   电话[   ]
   [添加]
   <table>
      ....           X
   </table>
   作业2:授权



