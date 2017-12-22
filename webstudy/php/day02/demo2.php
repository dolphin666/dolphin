<?php
    $chinese=70;
    $english=71;
    $math=72;
    echo '第一个学生的总分为：'.$sum=$chinese+$english+$math;
    $total=$sum;
    echo "<hr>";
    $chinese=80;
    $english=81;
    $math=82;
    echo '第一个学生的总分为：'.$sum=$chinese+$english+$math;
    $total=$total+$sum;
    echo "<hr>";
    $chinese=90;
    $english=91;
    $math=92;
    echo '第一个学生的总分为：'.$sum=$chinese+$english+$math;
    echo "<hr>";
    echo "三个学生的总分为：".$total=$total+$sum;
    echo "<hr>";
    echo "三个学生的平均分为：".$svg=$total/3;
?>