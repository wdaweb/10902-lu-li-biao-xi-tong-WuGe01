<?php
include_once "../plugins/base.php";
$rows=$exp->all(['sh'=>'1']);
$str="";
$e=1;
foreach ($rows as $row) {
  $str=$str."<div class='card mt-5 expSize'>
            <div class='card-header expColor'>
              <div class='card-expimg'>
              <img src='./Skillimg/".$row['name']."' class='SKIIIiCON'>
              </div>
              <div><h4 >".$row['title']."</h4></div>
              <div><h2 >".$row['text']."</h2></div>
            <div class='card-footer expColor'>
            ".$row['time']."
            </div>
          </div>";

    $e++;
}

echo $str;
?>