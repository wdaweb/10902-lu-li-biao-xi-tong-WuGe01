<?php
include_once "../plugins/base.php";
$rows=$exp->all();
$str="<table style='width: 100%;'>";
$e=1;
foreach ($rows as $row) {
$str=$str."<tr id='showExp".$e."'>
<td style='width: 10%; id='Expimg".$row['id']."'><img id='inExpimg".$row['id']."' class=Expimg' src='./Expimg/".$row['name']."' ></td>
<td style='width: 75%;>
<div style='width: 95%; id='Exptitle".$row['id']."'>".$row['title']."</div>
<div style='width: 95% id='Exptext".$row['id']."'><pre class='ExpPre'>".$row['text']."</pre></div>
<div style='width: 95% id='Exptime".$row['id']."'>".$row['time']."</div>
</td>
<td style='width: 5%; id='Expsh".$row['id']."'><input class='b-touch btn btn-outline-secondary' type='radio' ></td>
<td style='width: 5%; id='Expbtn".$row['id']."'><input class='b-touch btn btn-outline-secondary' type='button' onclick='fixExp(".$row['id'].")' value='修改'></td>
<td style='width: 5%; id='Expbthc".$row['id']."'><input class='b-touch btn btn-outline-secondary' type='button' onclick='delExp(".$row['id'].")' value='刪除'></td>
</tr>";
$e++;
}
$str=$str."</table>";
echo $str;

?>