<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="./plugins//bootstrap.css">
    <link rel="stylesheet" href="mystyle.css">
    <script src="./plugins/jquery-3.5.1.js"></script>
    <title>我的電子履歷表</title>
</head>
<body>
    <header>
        <div class="header">
            <div class="container">
                <a href="?do=main"><img class="b-touch headerIn" src="./img/logo-01.png"></a> 
                <a class="headerWord b-touch btn btn-outline-secondary" style="border: 0px;" href="?do=log">後台</a>
                <a class="headerWord b-touch btn btn-outline-secondary" style="border: 0px;" href="?do=tel">聯繫</a>
                <a class="headerWord b-touch btn btn-outline-secondary" style="border: 0px;" href="?do=art">作品</a>
                <a class="headerWord b-touch btn btn-outline-secondary" style="border: 0px;" href="?do=exp">經歷</a>
                <a class="headerWord b-touch btn btn-outline-secondary" style="border: 0px;" href="?do=skill">技能</a>
                <a class="headerWord b-touch btn btn-outline-secondary" style="border: 0px;" href="?do=res">自傳</a>
            </div>
        </div>
    </header>
    <div class="back"></div>
    <div class="big_dady">
        <div class="main container">
            <div style="width: 100%;padding: 10px;">
<?php
    (!empty($_GET['do']))?include_once "./api/".$_GET['do'].".php":include_once "./api/main.php";
?>  
            </div>
        </div>
    </div>
</body>
</html>
