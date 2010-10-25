<?php 
	$array=[
		["哈尔滨","齐齐哈尔"],
		["长春","吉林"],
		["沈阳","大连"]
	];
	#获取前端传递过来的 province 的value值
	$p_value=$_REQUEST["p_value"];
	#根据value获取子数组，以json的方式返回
	echo json_encode($array[$p_value]);
?>