<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
 <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
 <meta name="format-detection"content="telephone=no">
 <meta name="apple-mobile-web-app-capable" content="yes" />
 <meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta http-equir="content-type" charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>    
</head>
<body>
<style>
     body{
       text-align: center;
       background-color: 	#F0E68C;
       font-family: "MS 明朝";  
       font-size : 25px;
    } 
    p {
    font-family: "MS 明朝";  
    text-align:center;
    font-size : 30px; 
    line-height : 2; 
}
button {
font-family: "MS 明朝"; 
padding: 10px 10px; 
display: block;
margin: auto;
border-radius: 10px;
background-color:		#C0C0C0;
}
</style>
<?php
session_start();

require '../DAO.php';
$dao = new DAO();

echo $_SESSION['delete_id'];

$delete = $dao -> schedule_delete($_SESSION["delete_id"],$_SESSION['group_id']);
?>



<form action="?" method="post">

    <p>予定を削除しました</p>

    <button type = "submit" formaction="schedule_check.php">スケジュール確認画面へと戻る</button>

</body>



