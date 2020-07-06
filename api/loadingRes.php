<?php
include_once "../plugins/base.php";
$str=$res->find(1);
$date=[
    'text'=>$str['text'],
    'title'=>$str['title']
];
echo json_encode($date);
?>