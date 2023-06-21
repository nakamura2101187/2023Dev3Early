<?php
//セッションの開始
session_start();

//DAOファイルと接続
require '../DAO.php';
$dao = new DAO();

//ログインユーザのユーザ情報取得
$user = $dao->loginUser($_POST['mail'],$_POST['pass']);

//ユーザ情報が正しければグループログイン画面へと遷移する
foreach($user as $row){
    $_SESSION['mail'] = $row['mail'];
    $_SESSION['pass'] = $row['pass'];
    $_SESSION['id'] = $row['account_id'];
    header('Location: g_login.php');
}
if(count($user) == 0){
    header('Location: login.php?message=error');
}

?>