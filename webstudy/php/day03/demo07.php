<?php
    /*$i=1;
        do{
                echo "※";
                $i++;
                if($i%10===1){
                    echo "<br>";
                }
            }while(
                $i<=50
            );*/
    $i=1;
    $j=1;
    do{
        $i=1;
        do{
            echo "*";
            $i++;
        }while(
            $i<=$j
        );
        echo "<br>";
        $j++;
    }while(
        $j<=5
    );
?>