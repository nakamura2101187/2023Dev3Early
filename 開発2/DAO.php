<?php
class DAO{
    private function dbConnect(){
        $pdo = new PDO('mysql:host=localhost;dbname=kaihatu2;charset=utf8','webuser','abccsd2');
        return $pdo;
    }

    //ランダムに出力された数字がグループIDと被って無いか判断する
    public function check_group($rand){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM `group` WHERE group_id = ?";
        $ps = $pdo ->prepare($sql);
        $ps -> bindValue(1,$rand,PDO::PARAM_INT);
        $ps -> execute();
        $searchArray = $ps->fetchAll();
        return $searchArray;
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

    //新規登録時にグループ情報を登録する
    public function ginsertUser($id,$aikotoba,$name){
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO `group` (group_id,word, group_name)
                VALUES(?,?,?)";

        $ps = $pdo->prepare($sql);

        $ps->bindValue(1,$id,PDO::PARAM_STR);
        $ps->bindValue(2,$aikotoba,PDO::PARAM_STR);
        $ps->bindValue(3,$name,PDO::PARAM_STR);

        $ps->execute();
    }


    //ログイン時にメールアドレスとパスワードが合っているかを判断する
    public function loginUser($mail,$pass){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM account WHERE mail = ? AND pass = ?";
        $ps = $pdo ->prepare($sql);
        $ps -> bindValue(1,$mail,PDO::PARAM_STR);
        $ps -> bindValue(2,$pass,PDO::PARAM_STR);
        $ps -> execute();
        $searchArray = $ps->fetchAll();
        return $searchArray;
    }

    //ログイン時にグループIDと合言葉からログインしたいグループを特定する
    public function g_loginUser($id,$aikotoba){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM `group` WHERE group_id = ? AND word = ?";
        $ps = $pdo ->prepare($sql);
        $ps -> bindValue(1,$id,PDO::PARAM_INT);
        $ps -> bindValue(2,$aikotoba,PDO::PARAM_STR);
        $ps -> execute();
        $searchArray = $ps->fetchAll();
        return $searchArray;
    }

    public function schedule_check($id){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM schedule WHERE group_id = ?";
        $ps = $pdo -> prepare($sql);
        $ps ->bindValue(1,$id,PDO::PARAM_INT);
        $ps -> execute();
        $searchArray = $ps ->fetchAll();
        return $searchArray;
    }

    public function insert_schedule($id,$title,$startday,$starttime,$endday,$endtime,$memo){
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO schedule(group_id,title,startday,starttime,endday,endtime,memo)
                VALUES(?,?,?,?,?,?,?)";

        $ps = $pdo->prepare($sql);

        $ps->bindValue(1,$id,PDO::PARAM_INT);
        $ps->bindValue(2,$title,PDO::PARAM_STR);
        $ps->bindValue(3,$startday,PDO::PARAM_INT);
        $ps->bindValue(4,$starttime,PDO::PARAM_INT);
        $ps->bindValue(5,$endday,PDO::PARAM_INT);
        $ps->bindValue(6,$endtime,PDO::PARAM_INT);
        $ps->bindValue(7,$memo,PDO::PARAM_STR);

        $ps->execute();
    }

    public function schedule_delete($id1,$id2){
        $pdo = $this->dbConnect();
        $sql = "DELETE FROM schedule WHERE schedule_id = ? AND group_id = ?";

        $ps = $pdo->prepare($sql);

        $ps->bindValue(1,$id1,PDO::PARAM_INT);
        $ps->bindValue(2,$id2,PDO::PARAM_INT);

        $ps->execute();
    }
}