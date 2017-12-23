<?php
    $conn=mysqli_connect('127.0.0.1','root',"","tedu",3306);
    $sql="INSERT INTO dept VALUES(50,'TEST','NY');";
    $result=mysqli_query($conn,$sql);
    if($result===false){
        echo "执行失败";
    }else{
        echo "执行成功";
    }

?>