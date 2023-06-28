<!DOCTYPE html>
<html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
 <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
 <meta name="format-detection"content="telephone=no">
 <meta name="apple-mobile-web-app-capable" content="yes" />
 <meta name="apple-mobile-web-app-status-bar-style" content="black" />
 <style type="text/css">*{margin:0;padding:0; border:0;}</style> 
<meta http-equir="content-type" charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/acnt_2.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
       
<body class="tema">
    <title>新規登録完了画面</title>
<?php
session_start();

require '../DAO.php';
$dao = new DAO();

    $_SESSION['user'] =
    ['mail' => $_POST['mail'],
     'pass' => $_POST['pass'],
     'name' => $_POST['name'],
];
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