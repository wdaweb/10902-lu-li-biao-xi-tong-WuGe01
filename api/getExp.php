<?php
include_once "../plugins/base.php";
$rows=$exp->all();
$str="<table style='width: 100%;'>";
$e=1;
foreach ($rows as $row) {
$str=$str."<tr id='showExp".$e."'>
<td id='Expimg".$row['id']."'><img id='inExpimg".$row['id']."' class=Expimg' src='./Expimg/".$row['name']."' ></td>
<td id='Exptitle".$row['id']."'>".$row['title']."</td>
<td width: 40%;  id='Exptext".$row['id']."'>".$row['text']."</td>
<td id='Exptime".$row['id']."'>".$row['time']."</td>
<td id='Expsh".$row['id']."'><input class='b-touch btn btn-outline-secondary' type='radio' ></td>
<td id='Expbtn".$row['id']."'><input class='b-touch btn btn-outline-secondary' type='button' onclick='fixExp(".$row['id'].")' value='修改'></td>
<td id='Expbthc".$row['id']."'><input class='b-touch btn btn-outline-secondary' type='button' onclick='delExp(".$row['id'].")' value='刪除'></td>
</tr>";
$e++;
}
$str=$str."</table>";
echo $str;

?>