<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>新規登録確認情報画面</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        
</head>
    <body>
    <?php
    require '../DAO.php';

    $dao = new DAO();
    session_start();

 //　ユーザ情報をセッション関数に登録　//
    $_SESSION['user'] =
    ['mail' => $_POST['mail'],
     'pass' => $_POST['pass'],
     'name' => $_POST['name'],
     'g_name' => $_POST['g_name'],
     'aikotoba' => $_POST['aikotoba']]
    ?>
    <form action = "?" method = "post">
        
    <h3>以下の内容で登録を完了しますか？</h3>
    <h4>メールアドレス</h4>
    <?php
    echo '<h4>'. $_POST['mail'] .'</h4>';
    ?>
    <h4>パスワード</h4>
    <?php
    echo '<h4>'. $_POST['pass'] .'</h4>';
    ?>
    <h4>ニックネーム</h4>
    <?php
    echo '<h4>'. $_POST['name'] .'</h4>';
    ?>
    <h4>グループ名</h4>
    <?php
    echo '<h4>'. $_POST['g_name'] .'</h4>';
    ?>
    <h4>あいことば</h4>
    <?php
    echo '<h4>'. $_POST['aikotoba'] .'</h4>';
    ?>

    <button type='submit' formaction="acnt_1.php">修正する</button>
    <button type='submit' formaction="acnt_3.php">登録する</button>

    </body>
</html>