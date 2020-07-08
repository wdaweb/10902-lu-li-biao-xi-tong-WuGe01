<?php
include_once "../plugins/base.php";
$rows=$exp->all(['sh'=>'1']);
$str="";
$e=1;
foreach ($rows as $row) {
  $str=$str."<div class='card mt-2 expSize col-12' id='Expcard".$e."'>
            <div class='card-header expColor'>
              <div class='card-expimg'>
              <img src='./Expimg/".$row['name']."' class='SKIIIiCON'>
              </div>
              <div><h2>".$row['title']."</h2></div>
              <div><h5 class='h5Exp'>".$row['text']."</h5></div>
            <div class='card-footer expColor'>
            ".$row['time']."
            </div></div>
          </div>";

    $e++;
}

echo $str;
?>