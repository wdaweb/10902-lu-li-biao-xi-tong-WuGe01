<?php
include_once "../plugins/base.php";
$link=$_POST['link'];
$title=$_POST['title'];
$text=$_POST['text'];
$sh=($_POST['showArt']==true)?1:0;

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
    move_uploaded_file($_FILES['file']['tmp_name'],"../Artimg/".$imgName);
    $date=[
        'name'=> $imgName,
        'title'=> $title,
        'link'=> $link,
        'text'=> $text,
        'sh'=> $sh
    ];
$art->save($date);
}
?>