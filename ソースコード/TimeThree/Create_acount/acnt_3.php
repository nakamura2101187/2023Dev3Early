<?php //セッションを開始する 
session_start();

require_once '../DAO.php';
$dao = new DAO();

$user = $dao ->insertUser($_SESSION['user']['mail'],$_SESSION["user"]["pass"],$_SESSION["user"]["name"]);

foreach($_SESSION['user'] as $row){

    unset($row);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="content-type" charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/acnt_3.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<title>新規登録完了画面</title>
</head>
    <style>
    body{
       text-align: center;
       background-color: 	#F0E68C;
    } 
    button {
    font-family: "MS 明朝";       
    padding: 5px 10px; 
    display: block;
    margin: auto;
    border-radius: 15px;
    background-color:		#C0C0C0;
}
</style>
<body class="tema">
<span>登録が完了しました！</span>
<form action="?" method="post"> 
    <button type = "submit" formaction="../Login/login.php">ログイン画面に戻る</button>
</form>
</body>
</html>
