<?php
include_once "../plugins/base.php";
$str=$tel->find(1);
$date=[
    'food'=>$str['food'],
    'word'=>$str['word'],
    'place'=>$str['place'],
    'tel'=>$str['tel'],
    'email'=>$str['email'],
    'telTime'=>$str['telTime']
];
echo json_encode($date);
?>