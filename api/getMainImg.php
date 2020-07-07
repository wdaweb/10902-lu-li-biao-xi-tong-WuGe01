<?php
include_once "../plugins/base.php";
$str=$main->find(1);
$imges=$img->find(1);
$date=[
    'text1'=>$str['text1'],
    'text2'=>$str['text2'],
    'text3'=>$str['text3'],
    'name'=>$imges['name']
];
echo json_encode($date);
?>