<?php
    require('init.php');

    $sql="SELECT * FROM xz_user";
        $result=mysqli_query($conn,$sql);

        if($result===false){    //SQL语法错误！
            echo "查询失败！<br>";
            echo "请检查SQL语法：$sql";
        }else{  //
            $arr=mysqli_fetch_all($result,3);
            var_dump($arr);
        }
?>