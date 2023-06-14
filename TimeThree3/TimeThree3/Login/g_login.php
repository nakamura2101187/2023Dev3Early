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

//セッションの開始
session_start();

?>

<form action="g_login_check.php" method="post">

    <h2 class="test">グループIDと合言葉を入力してください</h2><br>
    <input type="text" name="group_id" placeholder="グループID"><br><br>
    <input type="text" name="aikotoba" placeholder="合言葉"><br>

    <br>
    <p>アカウントを作成していない方</p>
    <a href="../Create_acount/gcreate_1.php">グループを新規登録</a>
    <br>
    <button type = "submit">ログイン</button>
</form>
</body>

