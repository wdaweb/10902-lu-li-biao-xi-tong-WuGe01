<?php
include_once "../plugins/base.php";
$rows=$art->all();
$str="<table style='width: 100%;'>";
$e=1;
foreach ($rows as $row) {
$str=$str."<tr id='showArt".$e."'>
    <td id='Artimg".$row['id']."'><img id='inArtimg".$row['id']."' class='Artimg' src='./Artimg/".$row['name']."' ></td>
    <td id='Arttitle".$row['id']."'>".$row['title']."</td>
    <td id='Arttext".$row['id']."'>".$row['text']."</td>
    <td id='Artlink".$row['id']."'>".$row['link']."</td>
    <td id='sh".$row['id']."'><input id='Insh".$row['id']."' class='b-touch btn btn-outline-secondary' type='checkbox' ";
    if($row['sh']==1){
        $str=$str."checked value='1'><input type='hidden' id='sh".$row['id']."' value='1'>";
    }else{
        $str=$str."><input type='hidden' id='sh".$row['id']."' value='1'>";
    }    
$str=$str."</td>
    <td id='Artbtn".$row['id']."'><input class='b-touch btn btn-outline-secondary' type='button' onclick='fixArt(".$row['id'].")' value='修改'></td>
    <td id='Artbthc".$row['id']."'><input class='b-touch btn btn-outline-secondary' type='button' onclick='delArt(".$row['id'].")' value='刪除'></td>
    </tr>";
$e++;
}
$str=$str."</table>";
echo $str;
?>

