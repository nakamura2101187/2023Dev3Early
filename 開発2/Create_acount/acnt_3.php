<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規登録完了画面</title>
</head>
<?php
session_start();

require '../DAO.php';
$dao = new DAO();

$g = 0;

while($g == 0){

    $rand = rand(1000,9999);
    $check_group = $dao -> check_group($rand);

    if(isset($check_group["group_id"])){
        $rand = 0;
    }else{
        $g = $g+1;
    }

}

$user = $dao ->insertUser($_SESSION['user']['mail'],$_SESSION["user"]["pass"],$_SESSION["user"]["name"]);
$group = $dao ->ginsertUser($rand,$_SESSION["user"]["aikotoba"],$_SESSION["user"]["g_name"]);


if(isset($_SESSION["user"]["name"]) && isset($_SESSION["user"]["aikotoba"])){

    echo 'グループの登録が完了しました！！<br>';
    echo $rand;

}else{

    echo "アカウントの登録が完了しました！";

}

?>
<form action="?" method="post"> 
    <button type = "submit" formaction="../Login/login.php">登録する</button>
</form>