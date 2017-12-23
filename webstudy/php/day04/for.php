<?php
    for($i=100;$i>=0;$i-=5){
        echo "$i/";
    }
    echo "<hr>";
    for($i=1,$sum=0;$i<=100;$i++){
        $sum=$sum+$i;
    }
    echo $sum;
    echo "<hr>";
    for($i=1,$v=1;$i<=9;$i++){
        $v=$v*$i;
    }
    echo $v;
    echo "<hr>";
    for($i=1,$j=99,$sum=0;$i<=9;$i++,$j-=5){
        $sum=$sum+$i/$j;
    }
    echo $sum;
?>