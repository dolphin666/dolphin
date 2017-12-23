<?php
    $i=100;
    $count=0;
    while(true){
        if($i%3===0){
            echo "$i/";
            $count++;
            if($count===50){
                break;
            }
        }
        $i++;
    }
?>