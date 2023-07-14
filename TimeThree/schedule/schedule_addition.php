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
                margin-left: 90px;
                border-radius: 50px;
                background-color:		#C0C0C0;
        }
        .b button{
                font-family: "MS 明朝"; 
                padding: 20px 15px; 
                display: block;
                margin-top: -5px;
                margin-left: 50px;
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
if(isset($_POST['schedule'])){
$schedule = $dao -> schedule_check($_SESSION['group_id'],$_POST['schedule'],1);
}

if(isset($schedule[0]["schedule_id"])){
    echo "a";

}

?>
<form action="?" method="post">

  
<?php 
if(isset($_POST['schedule'])){

    echo '<input type="text" name="title" value = '.$schedule[0]["title"].' placeholder="タイトル">
    <p>開始日時</p>
    <input type="date" name="startday" value = '.$schedule[0]["startday"].'><input type="time" name="starttime" value = '.$schedule[0]["starttime"]. '><br>
    <p>終了日時</p>    
    <input type="date" name="endday" value = '.$schedule[0]["endday"]. '><input type="time" name="endtime" value = '.$schedule[0]["endtime"]. '><br>
    <p>メモ
    <div class="z">
    <textarea name="memo" value = '.$schedule[0]["memo"].' ></textarea>
    </div>
    <p>入力する予定を個人の予定にしますか？<br>
    <input type="checkbox" value="1" name="mastar"><br></p>';
    echo '<div class ="a"><button type = "submit" name = addition value = '.$schedule[0]["schedule_id"].' formaction="schedule_addition_ok.php">予定を変更する</button>';

}else{
    echo '<input type="text" name="title" placeholder="タイトル">
    <p>開始日時</p>
    <input type="date" name="startday"><input type="time" name="starttime"value=><br>
    <p>終了日時</p>    
    <input type="date" name="endday"><input type="time" name="endtime"><br>

    <p>メモ
    <div class="z">
    <textarea name="memo"></textarea>
    </div>
    <p>入力する予定を個人の予定にしますか？<br>
    <input type="checkbox" value="1" name="mastar"><br></p>';
    echo '<div class ="a"><button type = "submit" formaction="schedule_addition_ok.php">予定を追加する</button></div>';
}

?>
    <div class="b">
    <button type = "submit" formaction="schedule_check.php">予定確認画面へと戻る</button>
    </div>

</form>
</body>