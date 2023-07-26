<?php //セッションを開始する 
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規登録完了画面</title>
</head>
<?php

require '../DAO.php';
$dao = new DAO();

if(isset($_SESSION["user"]["name"]) && isset($_SESSION["user"]["aikotoba"])){
    
    $g_id = $dao ->g_id($_SESSION["user"]["aikotoba"],$_SESSION["user"]["name"]);

    echo 'グループの登録が完了しました！！<br>';
    echo $g_id["group_id"];
}else{

    echo "アカウントの登録が完了しました！グループID：";
    

}

?>
<form action="?" method="post"> 
    <button type = "submit" formaction="../Login/test.php">登録する</button>
</form>