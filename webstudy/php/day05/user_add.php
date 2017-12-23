<?php
    @$n=$_REQUEST['uname'];
    if($n===null||$n===""){
        die("uname required");
    };
    //echo "abc";
    $p=$_REQUEST['upwd'];
    $e=$_REQUEST['email'];
    $h=$_REQUEST['phone'];
    //echo "$n-$p-$e-$h";
    //$conn=mysqli_connect('127.0.0.1',"root","","xuezi",3306);
    require("init.php");
    $sql="INSERT INTO xz_user VALUES(NULL,'$n','$p','$e','$h',NULL,NULL,NULL)";
    $result=mysqli_query($conn,$sql);
    if($result===false){
        echo "注册失败";
        echo "请检查SQL语法：$sql";
    }else{
        echo "注册成功 <br>";
        $uid=mysqli_insert_id($conn);
        echo "产生自增编号为：$uid";
    }
?>