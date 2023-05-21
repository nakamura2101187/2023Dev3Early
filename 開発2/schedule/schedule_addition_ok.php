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

$searchArray = $dao->insert_schedule($_SESSION['group_id'],$_POST['title'],$_POST['startday'],$_POST['starttime'],$_POST['endday'],$_POST['endtime'],$_POST['memo']);
?>

<form action="?" method="post">



<p>予定を追加しました</p>

    <button type = "submit" formaction="../Calendar/calendar.php">カレンダー画面へ戻る</button>

</form>
</body>
<script>
