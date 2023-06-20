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
  <head>
    <meta charset="utf-8" />
    <script type="text/javascript" charset="UTF-8"></script>
  </head>
  <body>
    <style>
       body{
       text-align: center;
       background-color: 	#F0E68C;
    } 
    h2 {
    font-family: "MS 明朝";      
    text-align:center;
    font-size : 30px; 
    line-height : 5; 
}
button {
font-family: "MS 明朝";      
padding: 10px 8px; 
display: block;
margin: auto;
border-radius: 10px;
background-color:		#C0C0C0;
}
input{
  font-family: "MS 明朝";    
  padding: 10px 15px;
  width: 600px;
  border-radius: 10px;
  border: 2px solid black;
  background-color:	#C0C0C0;
}p{
    font-family: "MS 明朝"; 
    font-size : 25px; 
    line-height : 4
} 

      </style>
      <h2>メール送信フォーム</h2>
    </p>
    <form action="?" method="post">
    
        <p >あなたが登録したメールアドレスを入力してください</p>
        <div class="container mt-3">
        <input type="text" name="to" placeholder="メールアドレス">
      </div>
      <div class="container mt-4">
      <button type = "submit" formaction="confirm.php">送信</button></div>
      <div class="container mt-3">
      <button type = "submit" formaction="../Login/login.php">ログイン画面に戻る</button></div>
    </form>
  </body>
</html>
