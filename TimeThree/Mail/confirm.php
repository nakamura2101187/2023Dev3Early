<<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
 <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
 <meta name="format-detection"content="telephone=no">
 <meta name="apple-mobile-web-app-capable" content="yes" />
 <meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta http-equir="content-type" charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/acnt_1.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
  <body>
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
    <form>
      <?php
      require '../DAO.php';
      $dao = new DAO();



      $to = $dao->address_check($_POST['to']);

      if(isset($to[0]["mail"])){
      mb_language("Japanese");
      mb_internal_encoding("UTF-8");

      $address = $_POST["to"];
      $title = "登録情報の確認";

      $content = "あなたの登録情報<br>ユーザーネーム　　".$to[0]["name"]."<br>　　パスワード　　".$to[0]["pass"]."<br><br>所属グループ<br>";

      foreach($to as $row){ 
        $content .= "グループネーム　　".$row["group_name"]."<br>　グループID　　　".$row["group_id"]."　　　合言葉　　　".$row["word"];
      }

      $headers = "From: sender@example.com\r\n";
      $headers .= "Reply-To: sender@example.com\r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

      if(mb_send_mail($address, $title, $content, $headers)){
        echo "メールを送信しました";
      } else {
        echo "メールの送信に失敗しました";
      };
    }else{
      echo 'そのようなメールアドレスは登録されていません。<br><br>
      入力されたメールアドレス:'.$_POST["mail"].'<br><br> 
      
      <button type = "submit" formaction="mailform.php">メールアドレス入力に戻る</button>
      <div class="container mt-2">
        <button type = "submit" formaction="../Login/login.php">ログイン画面に戻る</button></div>';
    }

    echo $content;
    ?>
    </form>
  </body>
</html>
