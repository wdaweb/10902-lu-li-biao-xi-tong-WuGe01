<?php
include_once "../plugins/base.php";
$title=$_POST['title'];
$text=$_POST['text'];
$power=$_POST['power'];
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
    move_uploaded_file($_FILES['file']['tmp_name'],"../Skillimg/".$imgName);
    $date=[
        'name'=> $imgName,
        'title'=> $title,
        'text'=> $text,
        'power'=> $power,
        'type'=> $_FILES['file']['type']
    ];
    $skill->save($date);
}


?>