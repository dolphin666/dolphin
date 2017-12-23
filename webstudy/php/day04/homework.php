<?php
    for($i=1;$i<=9;$i++){
        for($j=1;$j<=$i;$j++){
            echo $i."*".$j."=".$i*$j."&nbsp;&nbsp;";
        }
        echo "<br>";
    }

    echo "<hr>";
    for($i=100;$i<=999;$i++){
        if((intval($i/100))*(intval($i/100))*(intval($i/100))
        +(intval(($i%100)/10))*(intval(($i%100)/10))*(intval(($i%100)/10))
        +(intval(($i%100)%10))*(intval(($i%100)%10))*(intval(($i%100)%10))===$i){
        echo "$i<br>";
        }
    }
    echo "<hr>";
    for($i=2;$i<=99;$i++){
        for($n=2;$n<=$i-1;$n++){
            if($i%$n==0){
                break;
            }
        }
        if($i===$n){
            echo "$i/";
        }
    }
?>