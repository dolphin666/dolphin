<?php
    //initialize:整个项目的初始化文件包含着一些其他多个页面都需要的共享的代码
    $conn=mysqli_connect('127.0.0.1',"root","","xuezi",3306);
    $sql="SET NAMES UTF8";
    mysqli_query($conn,$sql);
?>