<?php
    $uname=$_REQUEST["uname"];
    $conn=mysqli_connect("127.0.0.1","root","","xuezi",3306);
    $sql="select * from xz_user where uname='$uname'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_row($result);
    if($row==null){
        echo "通过";
    }else{
        echo "用户名已存在";
    }
?>