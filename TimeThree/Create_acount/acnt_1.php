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
<link rel="stylesheet" type="text/css" href="../css/acnt_1.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<title>新規登録画面</title>
</head>
<body class="tema">
<div class="container mt-1">
<h1>新規登録画面</h1>
<div class="mail">
<form action="?" method="post">
<label for="mail" class="from-label">メールアドレス</label><br>
<input type="text" class="from-control" name="mail"placeholder="mailaddress">
</div>
<div class="container mt-1">
<label for="password" class="from-label">パスワード</label><br>
<input type="password" class="from-control" name="pass"placeholder="password">
</div>
<div class="container mt-1">
<label for="nickname" class="from-label">ニックネーム</label><br>
<input type="text" class="from-control" name="name"placeholder="ニックネーム">
</div>

<button type = "submit" formaction="../Login/login.php">ログイン画面へ戻る</button><br>
<button type = "submit" formaction="../Create_acount/acnt_2.php">登録する</button><br>
</form>
</div>
</body>
</html>
