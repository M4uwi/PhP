<?php

class login extends Dbh{

    protected function getuser ($uid, $pwd,){
        $stmt = $this->connect()->prepare('SELECT users_pwd FROM users WHERE users_id = ? OR users_email = ?;');


        if(!$stmt->execute(array($uid, $pwd,))) {
            $stmt = null;
            header ("location ../index.php?error=stmtfailed");
            exit();
        }

        if(!$stmt->rowcount() == 0) {
            $stmt = null;
            header ("location ../index.php?error=stmtfailed");
            exit();
        }

        $pwdhashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $pwdhashed[0]["users_pwd"]);

        if($checkPwd == false) {
            $stmt = null;
            header ("location ../index.php?error=stmtfailed");
            exit();
        }

        elseif($checkPwd == true ){
            $stmt = $this->connect()->prepare('SELECT FROM users WHERE users_id = ? OR users_email = ? AND users_pwd = ? ;');}
            

            if(!$stmt->execute(array($uid, $uid, $pwd,))) {
                $stmt = null;
                header ("location ../index.php?error=stmtfailed");
                exit();

            if(!$stmt->rowcount() == 0) {
                  $stmt = null;
                  header ("location ../index.php?error=stmtfailed");
                 exit();
                }

            $user = $stmt->fetchAll(PDO::FETCH_ASSO);

        $stmt = null;
    }
}
}