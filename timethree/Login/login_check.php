<?php
session_start();

require '../DAO.php';
$dao = new DAO();
//　ログインユーザのユーザ情報取得
$searchArray = $dao->loginUser($_POST['mail'],$_POST['pass']);

foreach($searchArray as $row){
    $_SESSION['mail'] = $row['mail'];
    $_SESSION['pass'] = $row['pass'];
    $_SESSION['id'] = $row['user_id'];
    $_SESSION['name'] = $row['name'];
    header('Location: g_login.php');
}
if(count($searchArray) == 0){
    header('Location: login.php');
}

?>
