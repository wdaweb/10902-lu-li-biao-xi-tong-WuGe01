<?php
include_once "../plugins/base.php";
$rows=$skill->all();
$str="<table style='width: 100%;'>
<tr>
<td>圖檔</td>
<td>標題</td>
<td width: 50%;>內容</td>
<td>能力值</td>
<td></td>
<td></td>
</tr>";
$e=1;
foreach ($rows as $row) {
$str=$str."<tr id='showSkill".$e."'>
<td id='Skillimg".$row['id']."'><img id='inSkillimg".$row['id']."' class=skillimg' src='./Skillimg/".$row['name']."' ></td>
<td id='Skilltitle".$row['id']."'>".$row['title']."</td>
<td width: 50%;  id='Skilltext".$row['id']."'>".$row['text']."</td>
<td id='Skillpower".$row['id']."'>".$row['power']."</td>
<td id='Skillbtn".$row['id']."'><input class='b-touch btn btn-outline-secondary' type='button' onclick='fixSkill(".$row['id'].")' value='修改'></td>
<td id='Skillbthc".$row['id']."'><input class='b-touch btn btn-outline-secondary' type='button' onclick='delSkill(".$row['id'].")' value='刪除'></td>
</tr>";
$e++;
}
$str=$str."</table>";
echo $str;
?>

