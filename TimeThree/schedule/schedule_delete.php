<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
   .example{
   	width: 100px;
   }
  
   body{

       text-align: center;

       background-color:    #F0E68C;

    }

    h1 {

    font-family: "MS 明朝";      

    text-align:center;

    font-size : 25px;

    line-height : 5;

}

    h2 {

    font-family: "MS 明朝";      

    text-align:center;

    font-size : 25px;

    line-height : 5;

}

button {

font-family: "MS 明朝";      

padding: 10px 15px;

display: block;

margin: auto;

border-radius: 15px;

background-color:       #C0C0C0;

}

input{

  font-family: "MS 明朝";    

  padding: 10px 15px;

  width: 600x;

  border-radius: 10px;

  border: 2px solid black;

  background-color: #C0C0C0;




}

p{

    font-family: "MS 明朝";




}

</style>

    <title>Document</title>    
</head>
<body>

<?php
require '../DAO.php';
$dao = new DAO();


session_start();
$_SESSION["delete_id"] = $_POST["delete"];

echo $_SESSION["delete_id"];
?>



<form action="?" method="post">

<?php    

    echo '<p>本当に予定を削除しますか？</p>
    <button type = "submit" formaction="schedule_delete_ok.php">削除する</button>
    <button type = "submit" formaction="schedule_check.php">戻る</button>';
 
?>
</form>
</body>