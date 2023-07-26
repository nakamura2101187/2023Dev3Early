<?php 
session_start(); //セッションを開始する 

if(isset($_GET['message'])){
$message = $_GET['message'];
}

//セッションの情報が登録されている場合、グループログイン画面へと遷移する
if(isset($_SESSION["mail"]) == true && isset($_SESSION["name"]) == true){
    header('Location: g_login.php');
}

?>
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
<link rel="stylesheet" type="text/css" href="../login.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<title>Document</title>    

</head>
 <style>
   body{
       text-align: center;
       background-color: 	#F0E68C;
    } 
    h1 {
    font-family: "MS 明朝";      
    text-align:center;
    font-size : 25px; 
    line-height : 5; 
}
    h2 {
    font-family: "MS 明朝";      
    text-align:center;
    font-size : 25px; 
    line-height : 5; 
}
button {
font-family: "MS 明朝";      
padding: 10px 15px; 
display: block;
margin: auto;
border-radius: 15px;
background-color:		#C0C0C0;
}
input{
  font-family: "MS 明朝";    
  padding: 10px 15px;
  width: 600x;
  border-radius: 10px;
  border: 2px solid black;
  background-color:	#C0C0C0;

} 
p{
    font-family: "MS 明朝"; 

} 
.error-message {
        color: red;
        font-weight: bold;
    }
 </style>

<body>

<form action="login_check.php" method="post">
    <br><br>
    <div id="error-message">
    <div class="container mt-3"></div>
    <h2 class="test">ユーザーログイン</h2><br>
    <div class="container mt-3">
    <input type="text" class="from-control" name="mail" placeholder="mailaddress"><br><br>
    </div>
    <div class="container mt-3">
    <input type="password" class="from-control" name="pass" placeholder="password"><br>
    </div>

    <br>
    <p>アカウント作成はこちら</p>
    <a href="../Create_acount/acnt_1.php">アカウントを新規登録</a><br>
    
    <?php
    if(isset($message)){
    echo '<p class="error-message">ログインに失敗しました。正しい情報を入力してください</p>';
    }
    ?>
    <br>
    <button type = "submit">ログイン</button>
</div>
</form>
<script type="text/javascript">
function check(){
    const mailPattern = /^[a-zA-Z0-9_.+-]+@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$/;
    let mail = document.userins.mail.value;
    let pass = document.userins.pass.value;
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!--
    <script>
    var loginForm = document.querySelector("form");
    loginForm.addEventListener("submit", function(event) {
        event.preventDefault();

        var mailInput = document.querySelector('input[name="mail"]');
        var passInput = document.querySelector('input[name="pass"]');
        var errorContainer = document.getElementById("error-container");

        if (mailInput.value === "" || passInput.value === "") {
            errorContainer.textContent = "正しいメールアドレスとパスワードを入力してください。";
        } else {
            loginForm.submit();
        }
    });
</script>
!-->

</body>

