<?php //セッションを開始する 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addition.css">   
    <style>
        .a button{
                font-family: "MS 明朝"; 
                padding: 10px 15px; 
                display: block;
                margin-top: -10px;
                margin-left: 60px;
                border-radius: 50px;
                background-color:		#C0C0C0;
        }
    </style>

    <title>Document</title>    
</head>
<body>

<?php
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

$mastar = isset($_POST['mastar']) ? $_POST['mastar'] : null;

echo "<br>".$mastar;

if(!isset($_POST["addition"])){
$searchArray = $dao->insert_schedule($_SESSION['group_id'],$_SESSION['id'],$_POST['title'],$sd,$st,$ed,$et,$_POST['memo'],$mastar);
}else{
$searchArray = $dao->update_schedule($_POST['addition'],$_POST['title'],$sd,$st,$ed,$et,$_POST['memo'],$mastar);
}
?>

<form action="?" method="post">



<p>予定を追加しました</p>

    <div class="a"><button type = "submit" formaction="../Calendar/calendar.php">カレンダー画面へ戻る</button></div>

</form>
</body>
<script>
