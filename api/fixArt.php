<?php
include_once "../plugins/base.php";
$link=$_POST['link'];
$title=$_POST['title'];
$text=$_POST['text'];
$sh=($_POST['sh']==true)?1:0;
if(!empty($_FILES)&& $_FILES['file']['error'] == 0){

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
    
}
if(!empty($_FILES)){
    $date=[
        'name'=> $imgName,
        'id'=> $_POST['id'],
        'title'=> $title,
        'text'=> $text,
        'link'=> $link,
        'sh'=> $sh
    ];
}else{
    $date=[
        'id'=> $_POST['id'],
        'title'=> $title,
        'text'=> $text,
        'link'=> $link,
        'sh'=> $sh
    ];
}
// print_r($date);
$art->save($date);

?>