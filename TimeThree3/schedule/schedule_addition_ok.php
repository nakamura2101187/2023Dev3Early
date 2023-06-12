<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>    
</head>
<body>

<?php
session_start();
require '../DAO.php';
$dao = new DAO();

$sd = preg_replace("/-/", "", $_POST["startday"]);
$st = preg_replace("/:/", "",$_POST["starttime"]);
$ed = preg_replace("/-/", "",$_POST["endday"]);
$et = preg_replace("/:/", "",$_POST["endtime"]);

$sd2 = intval($sd);
$st2 = intval($st);
$ed2 = intval($ed);
$et2 = intval($et);

echo $sd2,$st2,$ed2,$et2;

$searchArray = $dao->insert_schedule($_SESSION['group_id'],$_SESSION['id'],$_POST['title'],$sd,$st,$ed,$et,$_POST['memo']);


?>

<form action="?" method="post">



<p>予定を追加しました</p>

    <button type = "submit" formaction="../Calendar/calendar.php">カレンダー画面へ戻る</button>

</form>
</body>
<script>
