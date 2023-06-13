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

$_SESSION['user'] =
    ['mail' => $_POST['mail'],
     'pass' => $_POST['pass'],
     'name' => $_POST['name'],];

?>
     <h3>以下の内容で登録を完了しますか？</h3>
     <h4>メールアドレス</h4>
     <?php
     echo '<h4>'. $_POST['mail'] .'</h4>';
     ?>
     <h4>パスワード</h4>
     <?php
     echo '<h4>'. $_POST['pass'] .'</h4>';
     ?>
     <h4>ニックネーム</h4>
     <?php
     echo '<h4>'. $_POST['name'] .'</h4>';
     ?>
<form action="?" method="post"> 
    <button type='submit' formaction="acnt_1.php">修正する</button>
    <button type='submit' formaction="acnt_3.php">登録する</button>
</form>
</body>
</form>
