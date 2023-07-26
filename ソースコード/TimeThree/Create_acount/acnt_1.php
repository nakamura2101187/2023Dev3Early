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
        background-image: url(../img/haikei2.jpg);
    }
    body{
       text-align: center;
       background-color: 	#F0E68C;
       font-family: "MS 明朝";  
       font-size : 20px;
    } 
    h1 {
    font-family: "MS 明朝";  
    text-align:center;
    font-size : 30px; 
    line-height : 2; 
}
    h2 {
    font-family: "MS 明朝";  
    text-align:center;
    font-size : 25px; 
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
  text-align:center;
  font-family: "MS 明朝";
}
</style>

<title>新規登録画面</title>
</head>
<body class="tema">
<div class="container mt-1">
<h1>新規登録画面</h1>
<form action="acnt_2.php" name="createAccount" method="post" onsubmit="return check()"><!-- ここでアクションにURL書けばformactionいらない -->
    <div class="mail">
        <label for="mail" class="from-label">メールアドレス</label><br>
        <input type="text" class="from-control" name="mail"placeholder="mailaddress">
    </div>
    <div class="container mt-2">
        <label for="password" class="from-label">パスワード</label><br>
        <input type="password" class="from-control" name="pass"placeholder="password">
    </div>
    <div class="container mt-2">
        <label for="nickname" class="from-label">ニックネーム</label><br>
        <input type="text" class="fromcontrol" name="name"placeholder="ニックネーム">
    </div>
    <div class="container mt-4">
        <button onclick="history.back()">ログイン画面へ戻る</button><br>
    </div>

    <button type = "submit" onsubmit="return check()">登録する</button><br>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
</body>

<script>
function check(){
    const mailPattern = /^[a-zA-Z0-9_.+-]+@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$/;
    let mail = document.createAccount.mail.value;
    let pass = document.createAccount.pass.value;
    let isSuccess = true;

    if(mailPattern.test(mail) == false && pass.length < 6){
        alert('メールアドレス、パスワードの形式が不正です。\nパスワードは6文字以上の必要があります');
        isSuccess = false;
        return false;
    }
    else if(mailPattern.test(mail) == false){
            alert('メールアドレスの形式が不正です。');
            isSuccess = false;
            return false;
    }
    else if(pass.length < 6){
        alert('パスワードは6文字以上の必要があります');
        isSuccess = false;
        return false;
    }
    if(isSuccess == true){
        return true;
    }
};
</script>

</html>
