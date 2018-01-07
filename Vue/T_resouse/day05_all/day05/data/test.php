<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');
$output=[];
$output[] = [
'name'=>'zhangsan',
'age'=>20
];
$output[] = [
'name'=>'Reese',
'age'=>22
];

echo json_encode($output);

?>