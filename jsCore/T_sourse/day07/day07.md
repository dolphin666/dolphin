正课:
****ES5
1. call/apply/bind
2. 数组API

ES6

****ES5:
1. call/apply/bind
 替换this！
 何时: 只要this不是想要的，就用call/apply/bind替换
 鄙视: call vs apply vs bind
   call/apply : 立刻调用函数，并临时替换函数中的this为指定对象
     何时: 如果希望立刻调用函数时
     如何: fun.call(obj,参数值,......)
           立刻调用fun函数，并临时替换fun中this为obj
          fun.apply(obj,数组)
           立刻调用fun函数，并临时替换fun中this为obj
           同时，打散数组参数为单个参数值，再传给fun
   bind: 基于原函数，创建一个新函数，永久绑定this为指定对象
     何时: 如果希望基于原函数创建一个新函数时
           或者说，不是立刻调用时
     如何: fun.bind(obj,参数值,...)
          创建一个和fun完全一样的新函数
          永久绑定fun中的this为obj
          永久绑定部分参数值

2. 数组API:
 3组:
 1. 判断:
  every(): 判断数组中是否所有元素都符合条件
   如何: var bool=arr.every(function(val,i,arr){
          //val自动获得当前元素值
          //i获得当前位置
          //arr 指当前数组对象本身
          return 判断条件
        })
   原理: every用function去每个元素上执行一次
        只有所有元素都返回true时，整体才返回true
        只要有一个返回false，则整体返回false
  some(): 判断数组中是否包含符合条件的元素
   如何: var bool=arr.some(function(val,i,arr){
          同every
          return 判断条件;
        })
   原理: some用function去每个元素上执行一次
        只要有一个返回true，则整体返回true
        除非所有元素都返回false时，整体才返回false
 2. 遍历API:
  forEach(): 对原数组中每个元素执行相同的操作
    如何: arr.forEach(function(val,i,arr){
           arr[i]=新值;
         })
  map(): 依次取出原数组中的值，执行相同操作后，放入新数组返回。
    如何: var newArr=arr.map(function(val,i,arr){
           return新值;
         })
 3. 过滤和汇总:
  filter(): 选取数组中符合条件的元素，组成新数组。原数组不变
    如何: var subArr=arr.filter(function(val,i,arr){
           return判断条件;
         })
  reduce(): 遍历数组中每个元素值，汇总出一个最终结果
    如何: var result=arr.reduce(function(prev,val,i,arr){
		   //prev 截止目前的临时汇总值
           return prev+val;
         },prev)

ES6:
1. let和块作用域
 let: 声明一个不会被提前的变量
   为什么: 传统js中声明提前破坏了程序正常的执行顺序
   何时: 所有的var，都要用let代替
   如何: 代替var
   原理: let a之前不允许提前使用a，也不允许重复声明a
  let为js添加了块级作用域:
   什么是块级作用域: 代码中任何一对{}之间的语句称为一个代码块，代码块中的变量，只能在块内使用
     比如: if(){...}else{...}   for(){...}   while(){...}
   问题: 没有块级作用域，块内的变量即使不执行，也会被提前到块外，污染块外部！
   为什么: 为了避免块内的变量提前到块外，污染外部的变量
   何时: 只要希望代码块内的变量不要影响外部的变量时
   原理: 自动使用匿名函数自调方式，包括块内的代码
2. 箭头函数: 简化回调函数
  何时: 今后所有回调函数都可用箭头函数简化
  如何:
   1. 去function加=>
   2. 更简化: 如果只有一个参数，可省略()
   3. 更简化: 如果回调函数中只有一句话，可省略{}
        强调: 如果只有一句话，则结尾;不要！
        更简化: 如果仅有一句return可继续省略return
  特点: 箭头内外共用同一个this
   特例: 如果希望内外this不通用时，就不能用箭头函数(ex.事件处理函数)
3. 参数增强: 3种:
 默认值default: ES6中可对参数指定默认值。
 调用时，如果没有传入参数值，则默认使用提前指定的默认值
 比如: Array.prototype.indexOf=function(elem,fromi=0){
   //fromi=fromi||0;
 }
 强调: 有默认值的参数，必须放在参数列表的最后

 剩余rest: 当传入函数的参数个数不确定时，可用...接住剩余的一切参数——代替arguments
  何时: 只要参数个数不确定
  为什么: arguments的3大问题:
    1. 总是获得全部参数，不能有选择的获得部分
    2. 是类数组对象，不是纯正的数组，不能使用数组API
    3. 不能改名
  如何: 在函数定义时的参数列表中: (其它固定参数, ...数组名)
  优: 1. 可有选择的获得部分参数
     2. 是纯正的数组
     3. 可自定义名称
  总结: 今后都用rest代替arguments
 散播spread: 在函数调用时，用...打散数组类型的参数为单个元素，再传入函数——代替apply
  何时: 如果函数本身需要多个参数单独传入，而需要传入的却是数组时
  如何: 在调用时，传入参数时用"...数组"打散数组参数，单个元素分别传入
4. 模板字符串:
 什么是: 支持内置表达式的字符串拼接
   ——简化了字符串拼接
 何时: 今后，只要拼接的字符串中包含要计算的表达式，就用模板字符串简化
 如何:
  1. 模板字符串必须用` `包裹
  2. 如果包含需要动态计算的表达式，则用${}包裹
  3. 反引号内默认支持换行
5. 解构: 简化复杂对象的打散和批量赋值
 1. 数组解构: 等号左右两边都是数组格式
      解构时，用下标对应值和变量
 2. 对象解构: 等号左右两边都是对象格式
      解构时，用属性名匹配值和变量
 3. 参数解构: 其实，在调用函数时，如果传入的参数值是数组或对象，也可被解构为单个参数值
     用法和数组结构和对象结构完全一样
6: class: 为了简化面向对象:
  封装，继承，多态，访问器属性，静态方法
  class: 集中定义构造函数和原型对象方法的程序结构
   为什么: 更像封装
   何时: 只要创建一种新类型，必须先定义class
   如何: class 类型名{
          constructor(...){
            this.xxx=xxx;
          }
          原型对象方法(){//类型名.prototype.xxx()
            ... this.xxx ...
          }
        }
  继承: 2步:
    1. 子类型构造函数中借用父类型构造函数:
      super(参数值)
       super自动指代父类型的构造函数
    2. 让子类型继承父类型
      class 子类型 extends 父类型
       不用再Object.setPrototypeOf
  访问器属性:
    class 类型名{
      constructor(...){
        this._age=age
      }
      get age(){return this._age}
      set age(val){
        ... ...
      }
    }








