<?php
include_once "../plugins/base.php";
$str=$res->find(1);
$imges=$resimg->find(1);
$date=[
    'text'=>$str['text'],
    'title'=>$str['title'],
    'name'=>$imges['name']
];
echo json_encode($date);
?>