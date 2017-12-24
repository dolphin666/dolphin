<?php
    $array=[
        ["哈尔滨","牡丹江"],
        ["长春","四平"],
        ["大连","沈阳"]
    ];
    $p_value=$_REQUEST["p_value"];
    echo json_encode($array[$p_value]);
?>