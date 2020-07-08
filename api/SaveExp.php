<?php
include_once "../plugins/base.php";
$title=$_POST['title'];
$text=$_POST['text'];
$time=$_POST['time'];
$showExp=($_POST['showExp']=="on")?1:0;
if($_FILES['file']['error'] == 0){

    switch ($_FILES['file']['type']) {
        case 'image/jpeg':
            $imgType='.jpg';
            break;
        case 'image/png':
            $imgType='.png';
            break;
        case 'image/gif':
            $imgType='.gif';
            break;
    }
    $imgName=$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],"../EXPimg/".$imgName);
    $date=[
        'name'=> $imgName,
        'title'=> $title,
        'time'=> $time,
        'text'=> $text,
        'sh'=> $showExp,
        'type'=> $_FILES['file']['type']
    ];
    $exp->save($date);
}
?>