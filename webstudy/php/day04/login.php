<?php
echo "this is login.php";
echo "<hr>";
   $n=$_REQUEST['loginName'];
   $p=$_REQUEST['loginPwd'];
    if($n==='root'&&$p==='123456'){
        echo "登录成功";
    }else{
        echo "用户名或密码错误！";
    }
?>