<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
 <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
 <meta name="format-detection"content="telephone=no">
 <meta name="apple-mobile-web-app-capable" content="yes" />
 <meta name="apple-mobile-web-app-status-bar-style" content="black" />
 <style type="text/css">*{margin:0;padding:0; border:0;}</style> 
<meta http-equir="content-type" charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/acnt_1.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
    <style>
    .tema{
        background-image: url(img/haikei2.jpg);
    }
    body{
       text-align: center;
       background-color: 	#F0E68C;
    } 
    button {
padding: 5px 10px; 
display: block;
margin: auto;
border-radius: 15px;
background-color:		#C0C0C0;
}
</style>
<body class="tema">
    <title>新規登録完了画面</title>
<?php
    $dao = new DAO();

$user = $dao ->insertUser($_SESSION['user']['mail'],$_SESSION["user"]["pass"]);
$group = $dao ->ginsertUser($_SESSION["user"]["aikotoba"],$_SESSION["user"]["name"]);
$g = 0;



$user = $dao ->insertUser($_SESSION['user']['mail'],$_SESSION["user"]["pass"],$_SESSION["user"]["name"]);

if(isset($_SESSION["user"]["name"]) && isset($_SESSION["user"]["aikotoba"])){
if(isset($_SESSION["user"]["g_name"]) && isset($_SESSION["user"]["aikotoba"])){
    
    $g_id = $dao ->g_id($_SESSION["user"]["aikotoba"],$_SESSION["user"]["name"]);
    while($g == 0){

    echo 'グループの登録が完了しました！！<br>';
        $rand = rand(1000,9999);
        $check_group = $dao -> check_group($rand);
    
        if(!isset($check_group["group_id"])){    
            $group = $dao ->ginsertUser($rand,$_SESSION["user"]["aikotoba"],$_SESSION["user"]["g_name"]);
            $g = $g+1;
        }
    
    }

    echo 'グループの登録が完了しました！！<br>';
    echo $rand;

}else{
if(isset($_SESSION["user"]["g_name"]) && isset($_SESSION["user"]["aikotoba"])){

}

session_destroy();
?>
<form action="?" method="post"> 
    <button type = "submit" formaction="../Login/test.php">登録する</button>
</form>
</body>
</body>
    <button type = "submit" formaction="../Login/login.php">登録する</button>
</form>
</body>