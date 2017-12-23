<?php
    $r=$_REQUEST['row'];
    $c=$_REQUEST['col'];
    for($i=0;$i<$r;$i++){
        for($j=1;$j<$c;$j++){
            echo "※";
        }
        echo "<br>";
    }
?>