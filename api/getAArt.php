<?php
include_once "../plugins/base.php";
$rows=$art->all(['sh'=>'1']);
$str="";
$e=1;
foreach ($rows as $row) {
  $str=$str."<div class='card mt-5 ArtSize b-touch' onclick='chkart(".$e.")' id='Artcard".$e."'>
  <a href='".$row['link']."' id='ArtLink".$e."' style='display: none;' target='_blank'></a>
    <div class='card-header skillColor'>
      <div class='artcard'>
        <h3 id='ArtTitle' style='padding-top: 7px;'>".$row['title']."</h3>
      </div>
      <img id='Artimg' src='./Artimg/".$row['name']."' class='artimg'>
    </div>
    <div class='card-footer skillColor'>
        <span id='ArtText'>".$row['text']."</span>
    </div>
</div>";

    $e++;
}

echo $str;
?>