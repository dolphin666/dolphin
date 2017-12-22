<?php
    function arrMax($arr){
            for($i=1,$sum=0;$i<count($arr);$i++){
            $sum+=$arr[$i];
        }
        return $sum/count($arr);
    }
    $a=arrMax([12,78,41,32,48,68]);
    echo $a;
?>