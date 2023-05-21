<?php
session_start();

require '../DAO.php';
$dao = new DAO();
//　ログインユーザのユーザ情報取得
$searchArray = $dao->g_loginUser($_POST['group_id'],$_POST['aikotoba']);

foreach($searchArray as $row){
    $_SESSION['group_id'] = $row['group_id'];
    $_SESSION['word'] = $row['word'];
    $_SESSION['group_name'] = $row['group_name'];
    header('Location: ../Calendar/calendar.php');
}
if(count($searchArray) == 0){
    header('Location: g_login.php');
}


?>
