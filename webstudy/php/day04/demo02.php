<?php
   $i=2000;
   $count=0;
    while(true){
        if((($i%4===0)&&($i%100!==0))||($i%400===0)){
            echo "$i/";
            $count++;
            if($count===10){
                break;
            }
        }
        $i++;
    }
    echo "<br>";
    $i=1;
    $sum=1;
    while(true){
        $sum=$sum*$i;
        if($sum>10000){
            break;
        }
        $i++;
    }
    echo $sum;
    echo "<br>";
    echo $i;
?>