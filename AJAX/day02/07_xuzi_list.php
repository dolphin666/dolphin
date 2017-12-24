<?php
    $conn=mysqli_connect("127.0.0.1","root","","xuezi",3306);
    $sql="SELECT uname,email,phone,user_name FROM xz_user";
    $result=mysqli_query($conn,$sql);
    $arr=mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo json_encode($arr);
?>