<?php
class DAO{
    private function dbConnect(){
        $pdo = new PDO('mysql:host=localhost;dbname=kaihatu2;charset=utf8','webuser','abccsd2');
        return $pdo;
    }

    // 新規登録時にユーザ情報を登録する
    public function insertUser($mail,$pass){
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO account(mail,pass)
                VALUES(?,?)";

        $ps = $pdo->prepare($sql);

        $ps->bindValue(1,$mail,PDO::PARAM_STR);
        $ps->bindValue(2,$pass,PDO::PARAM_STR);

        $ps->execute();
    }

    public function ginsertUser($aikotoba,$name){
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO `group` (word, group_name)
                VALUES(?,?)";

        $ps = $pdo->prepare($sql);

        $ps->bindValue(1,$aikotoba,PDO::PARAM_STR);
        $ps->bindValue(2,$name,PDO::PARAM_STR);

        $ps->execute();
    }

    public function g_id($aikotoba,$name){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM `group` WHERE group_name = ? AND word = ?";
        $ps = $pdo ->prepare($sql);
        $ps -> bindValue(1,$aikotoba,PDO::PARAM_STR);
        $ps -> bindValue(2,$name,PDO::PARAM_STR);
        $ps -> execute();
        $searchArray = $ps->fetchAll();
        return $searchArray;
    }


    //ログイン時にメールアドレスとパスワードから該当ユーザを検索する
    public function loginUser($mail,$pass){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM user WHERE mail = ? AND pass = ?";
        $ps = $pdo ->prepare($sql);
        $ps -> bindValue(1,$mail,PDO::PARAM_STR);
        $ps -> bindValue(2,$pass,PDO::PARAM_STR);
        $ps -> execute();
        $searchArray = $ps->fetchAll();
        return $searchArray;
    }

    public function g_loginUser($mail,$pass){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM user WHERE mail = ? AND pass = ?";
        $ps = $pdo ->prepare($sql);
        $ps -> bindValue(1,$mail,PDO::PARAM_STR);
        $ps -> bindValue(2,$pass,PDO::PARAM_STR);
        $ps -> execute();
        $searchArray = $ps->fetchAll();
        return $searchArray;
    }

    //カテゴリ情報を全権検索する
    
}