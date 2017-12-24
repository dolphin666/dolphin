<?php 
	#生成省份数组
	$province=["黑龙江","吉林","辽宁"];
	#将数组转换为JSON字符串响应给客户端
	echo json_encode($province);
?>