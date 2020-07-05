<?php
include_once "../plugins/base.php";
$img=new DB('res_img');
$str=$img->find(1);
echo $str['name'];
?>