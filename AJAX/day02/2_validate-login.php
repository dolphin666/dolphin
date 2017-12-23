<?php
 $uname=$_REQUEST["uname"];
 $upwd=$_REQUEST["upwd"];
    //echo "$uname-$upwd";
  $conn=mysqli_connect("127.0.0.1","root","","xuezi",3306);
  $sql="select * from xz_user where uname='$uname' and upwd='$upwd'";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_row($result);
  if($row==null){
    echo "用户名或密码不正确";
  }else{
    echo "登录成功";
  }
?>