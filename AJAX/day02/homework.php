<?php
    $uname=$_REQUEST["uname"];
    $upwd=$_REQUEST["upwd"];
    if($uname=="sanfeng.zhang"&&$upwd=="yinsusu"){
        echo "登录成功";
    }else{
        echo "用户密码不正确";
    }
?>