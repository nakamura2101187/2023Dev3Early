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

require '../DAO.php';
$dao = new DAO();


session_start();

$schedule = $dao -> schedule_check($_SESSION['group_id']);
?>

<form action="?" method="post">

<button type = "submit" formaction="../Calendar/calendar.php">カレンダー画面へ戻る</button><br>

<?php
foreach($schedule as $check){
                
                echo
                    $check["name"].            
                    $check["startday"].
                    $check["starttime"].
                    $check["endday"].
                    $check["endtime"]."<br>".
                    $check["title"]."<br>".
                    $check["memo"].
                    '<button type = "submit" formaction="schedule_delete.php" name = delete value ='. $check["schedule_id"] .' >予定を削除する</button><br>';
                
                }
                ?><br><br>
                <button type = "submit" formaction="schedule_addition.php">予定を追加する</button>
                
            </form>
        </body>
<script>