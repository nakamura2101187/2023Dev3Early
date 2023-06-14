<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equir="content-type" charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/acnt_1.css">
<style>
    .tema{
        background-image: url(../img/haikei2.jpg);
    }
</style>

<title>新規登録画面</title>
</head>

<body class="tema">
<body>

<h2>新規登録画面</h2>
<div class="mail">
<form action="?" method="post">
メールアドレス:<input type="text" name="mail"placeholder="メールアドレスを入力してください">
パスワード:　　<input type="password" name="pass"placeholder="パスワードを入力してください">
ニックネーム: <input type="text" name="name"placeholder="ニックネームを入力してください"> 
<br>
<br>


<button type = "submit" formaction="../Login/login.php">ログイン画面へ戻る</button><br>
<button type = "submit" formaction="../Create_acount/acnt_2.php">登録する</button><br>
</form>
</div>
</body>
</html>