<?php
include_once "../plugins/base.php";
$rows=$skill->all();
$str="";
// $str="<div class='row'>";
$e=1;
foreach ($rows as $row) {
    $str=$str."<div class='card mt-5 skillSize col-12 col-md-6 col-xl-4' id='skillcard".$e."'>
      <div class='card-header skillColor'>
        <div class='card-skillimg'>
          <img src='./Skillimg/".$row['name']."' class='SKIIIiCON'>
        </div>
        <div><h4 class='float-left'>".$row['title']."</h4></div>
        <div><h2 class='float-right'>".$row['power']."</h2></div>
      </div>
      <div class='card-footer skillColor'>
      ".$row['text']."
      </div>
    </div>";
    $e++;
}
// $str=$str."</div>";
echo $str;
?>