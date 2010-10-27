<?php
header("Content-Type:application/json");
require_once("../init.php");
$output=[];
$sql="SELECT * FROM xz_index_product where seq_recommended>0 order by seq_recommended limit 6";
$output["f1"]=sql_execute($sql);
$sql="SELECT * FROM xz_new_arrival where seq_new_arrival>0 order by seq_recommended limit 6";
$output["f2"]=sql_execute($sql);
$sql="SELECT * FROM xz_top_sale where seq_top_sale>0 order by seq_recommended limit 6";
$output["f3"]=sql_execute($sql);
echo json_encode($output);