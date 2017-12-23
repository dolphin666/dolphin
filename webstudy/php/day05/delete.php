<?php
    @$i=$_REQUEST['uid'];
    if($i===null||$i===""){
        die("uid required");
    }

    require("init.php");
    $sql="DELETE FROM xz_user WHERE uid=$i";
    $result=mysqli_query($conn,$sql);
    if($result===false){
            echo "删除失败<br>";
            echo "请检查SQL语法：$sql";
        }else{
            echo "删除成功 <br>";
            $count=mysqli_affected_rows($conn);
            echo "删除操作影响的行数为：$count";
        }
?>