<?php
include_once "../plugins/base.php";
$title=$_POST['title'];
$text=$_POST['text'];
$time=$_POST['time'];
$sh=($_POST['sh']=="1")?1:0;
$id=$_POST['id'];
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
    move_uploaded_file($_FILES['file']['tmp_name'],"../Expimg/".$imgName);
    
}
if(!empty($_FILES)){
    $date=[
        'name'=> $imgName,
        'type'=> $_FILES['file']['type'],
        'id'=> $_POST['id'],
        'title'=> $title,
        'text'=> $text,
        'time'=> $time,
        'sh'=> $sh
    ];
}else{
    $date=[
        'id'=> $_POST['id'],
        'title'=> $title,
        'text'=> $text,
        'time'=> $time,
        'sh'=> $sh
    ];
}
$exp->save($date);

?>