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

$a = 0;

session_start();

if(isset($_POST['schedule'])){
    $a = $a + $_POST['schedule'];
    $schedule = $dao -> schedule_check($_SESSION['group_id'],$a,1);
}else{
    $schedule = $dao -> schedule_check($_SESSION['group_id'],$a,0);
}

?>

<form action="?" method="post">

<button type = "submit" formaction="../Calendar/calendar.php">カレンダー画面へ戻る</button><br>



<?php
foreach($schedule as $check){

    $mastar = $dao->mastar_check($check["schedule_id"]);
    
    echo
                    "<br>".
                    $check["name"];
                    if(isset($mastar[0]["schedule_id"])){
                    echo "🔐";
                    }   
                    echo     
                    '<br>'.     
                    $check["startday"]."　".
                    $check["starttime"]."　～　".
                    $check["endday"]."　".
                    $check["endtime"]."　"."<br>".
                    $check["title"]."<br>".
                    $check["memo"];
                    


                    if(isset($mastar[0]["schedule_id"])){
                        if($mastar[0]["account_id"] == $_SESSION["id"]){
                            echo $_SESSION["id"];
                            echo '<br><button type = "submit" formaction="schedule_addition.php" name = schedule value ='. $check["schedule_id"] .' >予定を変更する</button>
                            <button type = "submit" formaction="schedule_delete.php" name = delete value ='. $check["schedule_id"] .' >予定を削除する</button><br><br>';
                        }else{ 
                            echo "この予定はマスタ予定なので、登録者以外は変更できません<br>";
                        }
                        }else{
                            echo '<br><button type = "submit" formaction="schedule_addition.php" name = schedule value ='. $check["schedule_id"] .' >予定を変更する</button>
                            <button type = "submit" formaction="schedule_delete.php" name = delete value ='. $check["schedule_id"] .' >予定を削除する</button><br><br>';
                        }
                    }
                
                ?><br><br>
                
                
                <button type = "submit" formaction="schedule_addition.php">予定を追加する</button>
                
            </form>
        </body>
<script>
