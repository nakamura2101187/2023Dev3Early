<?php

//セッションの開始
session_start();

//DAOファイルと接続
require '../DAO.php';
$dao = new DAO();



//ユーザが入力した情報がグループテーブルに登録されているかを確認
$searchArray = $dao->g_loginUser($_POST['group_id'],$_POST['aikotoba']);


//ユーザの入力した情報が正しいかを確認
foreach($searchArray as $row){
    $_SESSION['group_id'] = $row['group_id'];
    $_SESSION['word'] = $row['word'];
    $_SESSION['group_name'] = $row['group_name'];

    $check = $dao->shokai_check($_SESSION['id'],$_POST['group_id']);
    
    if(!isset($check["affiliation_id"])){
        $insert = $dao -> shokai_login($_SESSION['id'],$_POST['group_id']);
    }

    header('Location: ../Calendar/calendar.php');
}
if(count($searchArray) == 0){
    header('Location: g_login.php?message=error');
}

?>