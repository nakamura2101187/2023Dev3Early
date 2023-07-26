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
</head>
<body>
<style>
    body{
       text-align: center;
       background-color: 	#F0E68C;
       font-family: "MS 明朝";  
       font-size : 25px;
    } 
    button {
font-family: "MS 明朝"; 
padding: 10px 15px; 
display: block;
margin: auto;
border-radius: 15px;
background-color:		#C0C0C0;
}
.f{
    font-size: 20px;
}
</style>

<?php

require '../DAO.php';
$dao = new DAO();

$a = 0;


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
                            <button type = "submit" formaction="schedule_delete.php" name = delete value ='. $check["schedule_id"] .' >予定を削除する</button><br>';
                            
                        }else{ 
                            echo "<div class=f><br>※この予定は個人の予定なので変更できません<br></div>";
                        }
                        }else{
                            echo '<br><button type = "submit" formaction="schedule_addition.php" name = schedule value ='. $check["schedule_id"] .' >予定を変更する</button>
                            <button type = "submit" formaction="schedule_delete.php" name = delete value ='. $check["schedule_id"] .' >予定を削除する</button><br>';
                        }
                    }
                
                ?><br><br>
                
                
                <button type = "submit" formaction="schedule_addition.php">予定を追加する</button>
                
            </form>
        </body>
<script>

                <button type = "submit" formaction="schedule_addition.php">予定を追加する</button>
                
</script>
</html>
