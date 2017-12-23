<?php
 function printStart(){
    for($i=0;$i<4;$i++){
            for($j=0;$j<8;$j++){
                echo "※";
            }
            echo "<br>";
        }
 }
 //printStart();
 function print99(){
    for($i=1;$i<=9;$i++){
        for($j=1;$j<=$i;$j++){
            echo $j."*".$i."=".$i*$j."&nbsp;&nbsp;";
        }
        echo "<br>";
    }
 }
 //print99();
 function add(){
    $n=100;
    $m=300;
    echo $sum=$n+$m;

 }
 //add();
 function scoreAvg($arr){
    $sum=0;
    foreach($arr as $v){
        $sum+=$v;
    }
    $svg=$sum/count($arr);
    return $svg;
 }
 $a=scoreAvg([10,2,3,4]);
 //echo $a;
 function leiChengJi($n){
    for($i=1,$v=1;$i<=$n;$i++){
        $v=$v*$i;
    }
    return $v;
 }
 $a=leiChengJi(30);
 echo $a;
?>