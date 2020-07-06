<?php
include_once "../plugins/base.php";
$row=$res->find(1);
$row['text']=$_GET['text'];
$row['title']=$_GET['title'];
$res->save($row);
?>