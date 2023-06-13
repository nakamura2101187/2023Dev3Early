<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>    
</head>

<?php
//セッションを開始する
session_start();
//セッションの情報が登録されている場合、グループログイン画面へと遷移する
if(isset($_SESSION["mail"]) == true && isset($_SESSION["name"]) == true){
    header('Location: g_login.php');
}

?>
<form action="login_check.php" method="post">
    <br><br><br><br>

    <h2 class="test">メールアドレスとパスワードを入力してください</h2><br>
    <input type="text" name="mail" placeholder="メールアドレス"><br><br>
    <input type="password" name="pass" placeholder="パスワード"><br>

    <br>
    <p>アカウントを作成していない方</p>
    <a href="../Create_acount/acnt_1.php">アカウントを新規登録</a>
    <p>パスワードを忘れた方はこちら</p>
    <a href="../Mail/mailform.php">登録情報を確認する</a>
    <br>
    <br>
    <button type = "submit">ログイン</button>
</div>
</form>
</body>
<script>
