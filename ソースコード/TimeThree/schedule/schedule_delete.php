<?php //セッションを開始する 
session_start(); 
?>
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
<link rel="stylesheet" href="style1.css">
    <title>Document</title>    
</head>
<body>
<?php
require '../DAO.php';
$dao = new DAO();


$_SESSION["delete_id"] = $_POST["delete"];
$delete_title = $dao -> schedule_check(0,$_SESSION["delete_id"],1);

echo $delete_title[0]["title"];
?>



<form action="?" method="post">

<?php    

    echo '<p>本当に予定を削除しますか？</p>
    <button type = "submit" formaction="schedule_delete_ok.php">削除する</button><br>
    <button type = "submit" formaction="schedule_check.php">戻る</button>';
 
?>
</form>
</body>
