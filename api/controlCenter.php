<?php
include_once "../plugins/base.php";
$acc=$_POST['acc'];
$pw=$_POST['pw'];
$chanckLog=$log->count(['acc'=>$acc,'pw'=>$pw]);
if($chanckLog==1)$_SESSION['Login']=1;
echo $chanckLog;
?>
