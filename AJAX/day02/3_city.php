<?php
    $array=[
        ["哈尔滨","牡丹江"],
        ["长春","四平"],
        ["大连","沈阳"]
    ];
    $pid=$_REQUEST["pid"];
    echo json_encode($array[$pid]);
?>