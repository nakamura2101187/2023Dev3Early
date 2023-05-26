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
?>

<form action="?" method="post">


<input type="text" name="title" placeholder="タイトル">

<p>開始日時</p>
    <input type="date" name="startday"><input type="time" name="starttime"><br>
<p>終了日時</p>    
    <input type="date" name="endday"><input type="time" name="endtime"><br>
<p>メモ
    <textarea name="memo"></textarea>
<p>入力する予定をマスタースケジュールにしますか？</p>
    <input type="checkbox" value="1" name="mastar" checked><br>

    <button type = "submit" formaction="schedule_addition_ok.php">予定を追加する</button>

</form>
</body>
<script>
