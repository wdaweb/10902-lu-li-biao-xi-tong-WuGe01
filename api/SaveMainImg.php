<?php
include_once "../plugins/base.php";
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
    move_uploaded_file($_FILES['file']['tmp_name'],"../img/".$imgName);
    $date=[
        'id'=>'1',
        'name'=> $imgName,
        'type'=> $_FILES['file']['type']
    ];
    $img->save($date);
}
?>