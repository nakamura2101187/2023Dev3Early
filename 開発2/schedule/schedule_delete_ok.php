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

echo $_SESSION['delete_id'];

$delete = $dao -> schedule_delete($_SESSION["delete_id"],$_SESSION['group_id']);
?>



<form action="?" method="post">

    <p>予定を削除しました</p>

    <button type = "submit" formaction="../Calendar/calendar.php">カレンダー画面へ戻る</button>

</body>
<script>
