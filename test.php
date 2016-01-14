<?php
require_once './include.php';
$arr = $_POST;
$arr['app_status'] = 0;
if($a = insert("apply",$arr)) 
// echo $a;
// echo $arr['pro_name'];
// echo $arr['pro_desc'];
// echo $arr['app_status'];
// echo $arr['app_phone'];
// echo $arr['app_address'];