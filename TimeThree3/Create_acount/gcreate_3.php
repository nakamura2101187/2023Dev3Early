<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規登録完了画面</title>
    <style>
    .tema{
        background-image: url(img/haikei2.jpg);
    }
</style>
</head>
<body class="tema">
<?php
session_start();

require '../DAO.php';
$dao = new DAO();

$g = 0;
    
    while($g == 0){

        $rand = rand(1000,99999);
        $check_group = $dao -> check_group($rand);
    
        if(!isset($check_group["group_id"])){    
            $group = $dao ->ginsertUser($rand,$_SESSION["group"]["aikotoba"],$_SESSION["group"]["g_name"]);
            $g = $g+1;
        }
    }

    echo 'グループの登録が完了しました！！<br>';

    echo $_SESSION["group"]["g_name"].'のグループID　:　';
    echo $rand;

//session_destroy();
?>
<form action="?" method="post"> 
    <button type = "submit" formaction="../Login/g_login.php">グループログイン画面に戻る</button>
</form>