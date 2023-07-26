<?php
class DAO{
    private function dbConnect(){
        $pdo = new PDO('mysql:host=localhost;dbname=timethree;charset=utf8','webuser','abccsd2');
        //$pdo = new PDO('mysql:host=mysql215.phy.lolipop.lan;dbname=LAA1417493-timethree;charset=utf8','LAA1417493','timethree');
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
    public function insertUser($mail,$pass,$name){
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO account(mail,pass,`name`)
                VALUES(?,?,?)";

        $ps = $pdo->prepare($sql);

        $ps->bindValue(1,$mail,PDO::PARAM_STR);
        $ps->bindValue(2,$pass,PDO::PARAM_STR);
        $ps->bindValue(3,$name,PDO::PARAM_STR);

        $ps->execute();
    }

    //新規登録時にグループ情報を登録する
    public function ginsertUser($id,$aikotoba,$name){
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO `group` (group_id,word, group_name)
                VALUES(?,?,?)";

        $ps = $pdo->prepare($sql);

        $ps->bindValue(1,$id,PDO::PARAM_INT);
        $ps->bindValue(2,$aikotoba,PDO::PARAM_STR);
        $ps->bindValue(3,$name,PDO::PARAM_STR);

        $ps->execute();
    }


    public function shokai_check($a_id,$g_id){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM affiliation WHERE account_id = ? AND group_id = ?";
        $ps = $pdo ->prepare($sql);
        $ps -> bindValue(1,$a_id,PDO::PARAM_STR);
        $ps -> bindValue(2,$g_id,PDO::PARAM_STR);
        $ps -> execute();
        $searchArray = $ps->fetchAll();
        return $searchArray;
    }
    

    public function shokai_login($id1,$id2){
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO affiliation (account_id,group_id)
                VALUES(?,?)";

        $ps = $pdo->prepare($sql);

        $ps->bindValue(1,$id1,PDO::PARAM_INT);
        $ps->bindValue(2,$id2,PDO::PARAM_INT);

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

    public function address_check($mail){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM affiliation
        JOIN account ON affiliation.account_id = account.account_id
        JOIN `group` ON affiliation.group_id = `group`.group_id
        WHERE account.mail = ?";
        $ps = $pdo ->prepare($sql);
        $ps -> bindValue(1,$mail,PDO::PARAM_STR);
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

    public function schedule_hyouji($id){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM schedule WHERE group_id = ?";
        $ps = $pdo -> prepare($sql);
        $ps ->bindValue(1,$id,PDO::PARAM_INT);
        $ps -> execute();
        $searchArray = $ps ->fetchAll();
        return $searchArray;
    }


    //スケジュールを確認する為にグループで登録したスケジュールを全権表示する
    public function schedule_check($id1,$id2,$a){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM schedule INNER JOIN account ON account.account_id = schedule.account_id
        WHERE CASE WHEN ? = 1 THEN schedule_id = ? ELSE group_id = ? END";
        $ps = $pdo -> prepare($sql);
        $ps ->bindValue(1,$a,PDO::PARAM_INT);
        $ps ->bindValue(2,$id2,PDO::PARAM_INT);
        $ps ->bindValue(3,$id1,PDO::PARAM_INT);

        $ps -> execute();
        $searchArray = $ps ->fetchAll();
        return $searchArray;
    }

    //スケジュールの情報を登録する
    public function insert_schedule($g_id,$id,$title,$startday,$starttime,$endday,$endtime,$memo,$mastar){
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO schedule(group_id,account_id,title,startday,starttime,endday,endtime,memo,mastar)
                VALUES(?,?,?,?,?,?,?,?,?)";

        $ps = $pdo->prepare($sql);

        $ps->bindValue(1,$g_id,PDO::PARAM_INT);
        $ps->bindValue(2,$id,PDO::PARAM_INT);
        $ps->bindValue(3,$title,PDO::PARAM_STR);
        $ps->bindValue(4,$startday,PDO::PARAM_INT);
        $starttime = substr($starttime, 0, 2) . ':' . substr($starttime, 2, 2) . ':00';
        $ps->bindValue(5, $starttime, PDO::PARAM_STR);
        $ps->bindValue(6,$endday,PDO::PARAM_INT);
        $endtime = substr($endtime, 0, 2) . ':' . substr($endtime, 2, 2) . ':00';
        $ps->bindValue(7, $endtime, PDO::PARAM_STR);
        $ps->bindValue(8,$memo,PDO::PARAM_STR);
        $ps->bindValue(9,$mastar,PDO::PARAM_INT);

        $ps->execute();
    }

    public function update_schedule($id,$title,$startday,$starttime,$endday,$endtime,$memo,$master){
        $pdo = $this->dbConnect();
        $sql = "UPDATE schedule
                SET  title = ?,startday = ?,starttime = ?,endday = ?,endtime = ?,memo = ?,mastar = ?
                WHERE schedule_id = ?";

        $ps = $pdo->prepare($sql);

        $ps->bindValue(1,$title,PDO::PARAM_STR);
        $ps->bindValue(2,$startday,PDO::PARAM_INT);
        $starttime = substr($starttime, 0, 2) . ':' . substr($starttime, 2, 2) . ':00';
        $ps->bindValue(3,$starttime,PDO::PARAM_INT);
        $ps->bindValue(4,$endday,PDO::PARAM_INT);
        $endtime = substr($endtime, 0, 2) . ':' . substr($endtime, 2, 2) . ':00';
        $ps->bindValue(5,$endtime, PDO::PARAM_INT);
        $ps->bindValue(6,$memo,PDO::PARAM_STR);
        $ps->bindValue(7,$master, PDO::PARAM_INT);
        $ps->bindValue(8,$id,PDO::PARAM_STR);

        $ps->execute();
    }

    public function mastar_check($id){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM schedule WHERE schedule_id = ? AND mastar = 1";
        $ps = $pdo ->prepare($sql);

        $ps->bindValue(1,$id,PDO::PARAM_INT);

        $ps -> execute();
        $searchArray = $ps ->fetchAll();
        return $searchArray;
    }

    //スケジュールを削除する
    public function schedule_delete($id1,$id2){
        $pdo = $this->dbConnect();
        $sql = "DELETE FROM schedule WHERE schedule_id = ? AND group_id = ?";

        $ps = $pdo->prepare($sql);

        $ps->bindValue(1,$id1,PDO::PARAM_INT);
        $ps->bindValue(2,$id2,PDO::PARAM_INT);

        $ps->execute();
    }
}