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
$_SESSION["delete_id"] = $_POST["delete"];

$mastar_check = $dao->mastar_check($_SESSION["delete_id"]);

?>



<form action="?" method="post">
<?php    
if(isset($mastar_check["mastar"])){
    if($mastar_check["account_id"] == $_SESSION['id']){
        echo '<p>本当に予定を削除しますか？</p>
    <button type = "submit" formaction="schedule_delete_ok.php">削除する</button>
    <button type = "submit" formaction="schedule_check.php">戻る</button>';
    }else{
        echo '<p>この予定はマスタスケジュールなので作成者以外変更出来ません！</p>';
        echo '<button type = "submit" formaction="schedule_check.php">戻る</button>';
    }
}else{
    echo '<p>本当に予定を削除しますか？</p>
    <button type = "submit" formaction="schedule_delete_ok.php">削除する</button>
    <button type = "submit" formaction="schedule_check.php">戻る</button>';
}

?>

</form>
</body>
<script>
