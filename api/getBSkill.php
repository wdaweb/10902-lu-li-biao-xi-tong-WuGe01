<?php
include_once "../plugins/base.php";
$rows=$skill->all();
$str="";
foreach ($rows as $row) {
$str=$str."<div class='row align-content-center'>
<div class='col' style='width: 100px;'><img class=skillimg' src='./Skillimg/".$row['name']."' ></div>
<p class='col' style='width: 100px;'>".$row['title']."</p>
<span class='col'>".$row['text']."</span>
<strong class='col' style='width: 50px;'>".$row['power']."</strong>
<div class='col' style='width: 50px;'>
  <input class='b-touch btn btn-outline-secondary' type='button' onclick='fixSkill(".$row['id'].")' value='修改'>
</div>
<div class='col' style='width: 50px;'>
<input class='b-touch btn btn-outline-secondary' type='button' onclick='delSkill(".$row['id'].")' value='刪除'>
</div>";
}
echo $str;
?>