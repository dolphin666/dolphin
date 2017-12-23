<?php
    @$n=$_REQUEST['uname'];
    if($n===null ||$n===""){
        die("uname required");
    }
    @$p=$_REQUEST['upwd'];
    if($p===null ||$p===""){
            die("upwd required");
        }

    require("init.php");
    $sql="SELECT * FROM xz_user WHERE uname='$n' AND upwd='$p'";
    $result=mysqli_query($conn,$sql);

    if($result===false){    //SQL语法错误！
        echo "查询失败！<br>";
        echo "请检查SQL语法：$sql";
    }else{  //
        $row=mysqli_fetch_row($result);
        var_dump($row);
        if($row===null){
            echo "用户名或密码错误！";
        }else{
            echo "登录成功";
        }
    }

?>