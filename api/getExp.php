<?php
include_once "../plugins/base.php";
$rows=$exp->all();
$str="<table style='width: 100%;'>";
$e=1;
foreach ($rows as $row) {

$str=$str."<tr id='showExp".$e."' class='Exptr'>
<td style='width: 10%;' id='Expg".$row['id']."'><img id='inExpimg".$row['id']."' class='Expimg' src='./Expimg/".$row['name']."' ></td>
<td style='width: 75%;'>
<div style='width: 95%;' id='Exptitle".$row['id']."'>".$row['title']."</div>
<div style='width: 95%;' id='Extext".$row['id']."'><pre class='ExpPre' id='Exptext".$row['id']."'>".$row['text']."</pre></div>
<div style='width: 95%;' id='Exptime".$row['id']."'>".$row['time']."</div>
</td>
<td style='width: 5%;' id='Expsh".$row['id']."'><input class='b-touch btn btn-outline-secondary' type='checkbox'";
if($row['sh']==1){
    $str=$str."checked value='1'><input type='hidden' id='sh".$row['id']."' value='1'>";
}else{
    $str=$str."><input type='hidden' id='sh".$row['id']."' value='1'>";
}
$str=$str." </td>
<td style='width: 5%;' id='Expbtn".$row['id']."'><input class='b-touch btn btn-outline-secondary' type='button' onclick='fixExp(".$row['id'].")' value='修改'></td>
<td style='width: 5%;' id='Expbthc".$row['id']."'><input class='b-touch btn btn-outline-secondary' type='button' onclick='delExp(".$row['id'].")' value='刪除'></td>
</tr>";
$e++;
}
$str=$str."</table>";
echo $str;

?>