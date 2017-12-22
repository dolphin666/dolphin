<?php
    @$i=$_REQUEST["uid"];
    if($i===null || $i===""){
        die("uid required");
    }
    @$n=$_REQUEST["user_name"];
    if($n===null || $n===""){
        die("user_name required");
    }
    @$g=$_REQUEST["gender"];
    if($g===null || $g===""){
        die("gender required");
    }
    @$e=$_REQUEST["email"];
    if($e===null || $e===""){
        die("email required");
    }
    @$p=$_REQUEST["phone"];
    if($p===null || $p===""){
        die("phone required");
    }

    require("init.php");

    $sql="UPDATE xz_user SET user_name='$n',gender='$g',email='$e',phone='$p' WHERE uid='$i'";
    $result=mysqli_query($conn,$sql);
    if($result===false){
            echo "修改失败<br>";
            echo "请检查SQL语法：$sql";
        }else{
            echo "修改成功 <br>";
            $count=mysqli_affected_rows($conn);
            echo "影响的行数为：$count";
        }


?>