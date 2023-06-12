<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
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
      <button type = "submit" formaction="../Login/login.php">ログイン画面に戻る</button>';
    }

    echo $content;
    ?>
    </form>
  </body>
</html>