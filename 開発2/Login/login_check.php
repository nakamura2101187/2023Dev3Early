<?php
session_start();

require '../DAO.php';
$dao = new DAO();
//　ログインユーザのユーザ情報取得
$user = $dao->loginUser($_POST['mail'],$_POST['pass']);

foreach($user as $row){
    $_SESSION['mail'] = $row['mail'];
    $_SESSION['pass'] = $row['pass'];
    $_SESSION['id'] = $row['account_id'];
    header('Location: g_login.php');
}
if(count($searchArray) == 0){
    header('Location: login.php');
}

?>
