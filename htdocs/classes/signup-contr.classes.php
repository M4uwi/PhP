<?php

class signupcontr extends signup{

    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdRepeat, $email) {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }

    public function signupUser() {
        if ($this->emptyinput == false){
            header("location: ../index.php?error=emptyinput");
            exit();
        }

         
        if ($this->invalidEmail == false){
            header("location: ../index.php?error=email");
            exit();
        }

        if ($this->invalidUid == false){
            header("location: ../index.php?error=username");
            exit();
        }

        if ($this->pwdMatch == false){
            header("location: ../index.php?error=passwordmatch");
            exit();
        }

        if ($this->uidTakenCheck == false){
            header("location: ../index.php?error=useroremailtaken");
            exit();
        }

        $this->setuser($this->uid, $this->pwd, $this->email);}


    private function emptyinput() {
    $result;
        if(empty($this->uid)) 
            $result = false;
        

        else{
            $result = true;
            }
        return $result;
    } 
  
    private function invalidUid() {
        $result;
        if (preg_match("/^[a-zA-Z0-9]*$/", $this->uid)){
            $result = false;
            }
        else{
            $result = true;
            }

        return $result;
        }

        private function invalidEmail() {
            $result;
            if (!filter_var($this-> email, FILTER_VALIDATE_EMAIL)){
                $result = false;
                }
            else{
                $result = true;
            }
            return $result;
        }

        private function pwdMatch() {
            $result;
            if ($this->pwd !== $this->pwdRepeat) {
                $result = true;
            } else {
                $result = false;
            }
            return $result;
        }

        private function invalidPassword() {
            $result;
            if ($this->checkUser($this->uid, $this->email) !== $this->pwdRepeat) {
                $result = true;
            } else {
                $result = false;
            }
            return $result;
        }
        
        private function uidTakenCheck() {
            $result;
            if (!$this->checkUser($this->uid, $this->email)) {
                $result = false;
            } 
            else {
                $result = true;
            }
            return $result;
        }
    