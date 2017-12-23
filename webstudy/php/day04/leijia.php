<?php
    $end=$_REQUEST['end'];
    var_dump($end);
    $end=(int)$end;
    var_dump($end);
    for($i=0,$sum=0;$i<=$end;$i++){
        $sum=$sum+$i;
    }
    echo $sum;
?>