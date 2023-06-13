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
<style>
    .tema{
        background-image: url(img/haikei2.jpg);
    }
</style>
<style>
    body{
       text-align: center;
       background-color: 	#F0E68C;
    } 
    h1 {
    font-family: "MS 明朝";  
    text-align:center;
    font-size : 20px; 
    line-height : 2; 
}
    h2 {
    font-family: "MS 明朝";  
    text-align:center;
    font-size : 20px; 
    line-height : 2.3; 
}
button {
font-family: "MS 明朝"; 
padding: 5px 10px; 
display: block;
margin: auto;
border-radius: 15px;
background-color:		#C0C0C0;
}
input{
  font-family: "MS 明朝";
  padding: 5px 10px;
  width: 600x;
  border-radius: 10px;
  border: 2px solid black;
  background-color:	#C0C0C0;

}
label{
  font-family: "MS 明朝";
}
</style>
<title>新規登録画面</title>
</head>

<body class="tema">
<body>

<h2>新規登録画面</h2>
<div class="container mt-1">
<h1>新規登録画面</h1>
<div class="mail">
<form action="?" method="post">
メールアドレス:<input type="text" name="mail"placeholder="メールアドレスを入力してください">
パスワード:　　<input type="password" name="pass"placeholder="パスワードを入力してください">
ニックネーム: <input type="text" name="name"placeholder="ニックネームを入力してください"> 
<br>
<br>
グループ名:<input type="text" name="name"placeholder="グループ名を入力してください">
グループ名:<input type="text" name="g_name"placeholder="グループ名を入力してください">
あいことば:　　<input type="text" name="aikotoba"placeholder="あいことばを入力してください">
<br>

<label for="mail" class="from-label">メールアドレス</label><br>
<input type="text" class="from-control" name="mail"placeholder="mailaddress">
</div>
<div class="container mt-1">
<label for="password" class="from-label">パスワード</label><br>
<input type="password" class="from-control" name="pass"placeholder="password">
</div>
<div class="container mt-1">
<label for="nickname" class="from-label">ニックネーム</label><br>
<input type="text" class="from-control" name="nickname"placeholder="ニックネーム">
</div>
<h2>グループを作成する場合はこちらも入力してください</h2>
<div class="container mt-1">
<label for="groupname" class="from-label">グループ名</label><br>
<input type="text" class="from-control" name="name"placeholder="グループ名">
</div>
<div class="container mt-1">
<label for="word" class="from-label">あいことば</label><br>
<input type="text" class="from-control" name="aikotoba"placeholder="あいことば">
</div><br>
<button type = "submit" formaction="../Login/login.php">ログイン画面へ戻る</button><br>
<button type = "submit" formaction="../Create_acount/acnt_2.php">登録する</button><br>
</form>
</div>
</body>
</html>