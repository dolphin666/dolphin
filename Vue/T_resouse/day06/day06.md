今天学习的内容
1:复习昨天重点
2:今天的目标
   2.1:讲解 vue cli
      vue 提供开发部署工具 vue cli (脚手架)
      (1)hot reload  当代码修改，直接预览效果
      (2)框架己经创建好，快速进入开发
        (完整项目录)
      (3)组件组织方式
        将组件所有内容保存在一个文件 .vue(一个文件一个组件)
        放在src目录 components
      (3.1)单文件概念
      文件扩展名为 .vue 的 sinle-file components (单文件组件)
      有3个标签
      <template>     html
      </template>
      script          对组件设置
      style           样式设置

   2.2:vue 创建组件
   (1)创建 .vue结尾文件
    tpls\src\components\MyHeader.vue
   (2)配置路由词典
    tpls\src\router\index.js
    (2.1)引入要使用组件
import Header from '@/components/MyHeader'
    (2.2)配置路径
    {
      path: '/header',
      name: 'header',
      component: Header
    },
   (3)组件创建
    MyHeader.vue
    <template>
       html...
    </template>

   2.3:vue 创建组件 MyList.vue
    (1)list.php     获取数据  json [{name:"tom"}]
      http://127.0.0.1/list.php
    (2) MyList.vue  ajax
      http://127.0.0.1:8080/list
    注意:
    1:添加resource插件
     tpls/router/index.js
     import VueResource from 'vue-resource'   引入http插件
     Vue.use(VueResource)                  加载Vue对象中
    2:跨域请求另外JSONP

   2.3:vue 学子商城
   2.4:vue 学子商城用户登录
     (1)加载图片/css/js/copy
      tpls/src/asserts/**
     (2)
   2.5:vue 学子商城产品列表

   作业1:用户列表








