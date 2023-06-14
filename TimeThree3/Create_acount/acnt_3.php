<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .tema{
        background-image: url(img/haikei2.jpg);
    }
</style>
<body class="tema">
    <title>新規登録完了画面</title>
</head>
<?php
session_start();

require '../DAO.php';
$dao = new DAO();

$user = $dao ->insertUser($_SESSION['user']['mail'],$_SESSION["user"]["pass"],$_SESSION["user"]["name"]);


    echo "アカウントの登録が完了しました！";


foreach($_SESSION['user'] as $row){
    unset($row);
}
?>
<form action="?" method="post"> 
    <button type = "submit" formaction="../Login/login.php">ログイン画面に戻る</button>

</form>
</body>
</body>
    
</form>