<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>    
</head>

<?php
session_start();
if(isset($_SESSION["mail"]) == true && isset($_SESSION["name"]) == true){
    header('Location: ../3_Mypage/mypage.php');
}
?>

<form action="../Calendar/calendar" method="post">
    <article>

    <h2 class="test">グループIDと合言葉を入力してください</h2><br>
    <input type="text" name="group_id" placeholder="グループID"><br><br>
    <input type="text" name="aikotoba" placeholder="合言葉"><br>

    <br>
    <p>アカウントを作成していない方</p>
    <a href="../Create_acount/acnt_1.php">アカウントを新規登録</a>
    <br>
    <button type = "submit">ログイン</button>
</div>
</form>
</body>
<script>
