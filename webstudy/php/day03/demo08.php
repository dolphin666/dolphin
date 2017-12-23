<?php
    $i=1;
    $j=1;
    do{
        $j=1;
        do{
            echo $i."*".$j."=".$i*$j."&nbsp;&nbsp;";
            $j++;
        }while($j<=$i);
        echo "<br>";
        $i++;
    }while($i<=9)
?>