<?php
include_once "../plugins/base.php";
$row=$main->find(1);
$row['text1']=$_GET['text1'];
$row['text2']=$_GET['text2'];
$row['text3']=$_GET['text3'];
$main->save($row);
?>