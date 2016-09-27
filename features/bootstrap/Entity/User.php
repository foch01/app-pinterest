<?php
namespace Entity;


class User
{

      private $_id;
      private $_pseudo;
      private $_pwd;
      private $_mail;
      private $_key;

        public function __construct(){
        }
        public function setMail($mail){
          $this->_mail = $mail;
        }
        public function setPseudo($pseudo){
          $this->_pseudo = $pseudo;
        }
        public function setPwd($pwd){
          $this->_pwd = $pwd;
        }
        private function isValidUser(){
          if(is_null($this->_pseudo) || is_null($this->_mail) || is_null($this->_pwd)){
            return false;
          }
          return true;
        }
  

      public function connect(){
        $dbh = DBSingleton::getInstance()->getConnection();
        $sql = "select * from user where pseudo = ?  and pass = ?";
        $result = $dbh->prepare($sql);
        $result->execute(array($this->_pseudo, $this->_pwd)); 
        $temp= $result->fetchAll(\PDO::FETCH_NAMED);
        return count($temp)==1;
      }
      public function create(){
        $dbh = DBSingleton::getInstance()->getConnection();
        $no_error = true;
        
        $no_error = ($this->searchByEmail() == false);
        $no_error = $no_error && ($this->searchByPseudo() == false);
        $no_error = $no_error && $this->isValidUser();

            if($no_error){
              $req = $dbh->prepare("INSERT INTO user (pseudo, pass, mail) VALUES (:pseudo, :pass, :mail)");
                  $req->execute(array(
                        "pseudo" => $this->_pseudo,
                        "pass" => $this->_pwd,
                        "mail" => $this->_mail
                  ));
                  $result =  ($req->errorCode() == "00000");
                  if(!$result) {
                    print_r($req->errorInfo());
                  } 
                  return $result;
            } else{
              return false;
            }
      }
      public function delete(){
        $dbh = DBSingleton::getInstance()->getConnection();
        $no_error = true;
        
        $no_error = ($this->searchByEmail() == true);
        $no_error = $no_error && ($this->searchByPseudo() == true);
        if($no_error){
          $req = $dbh->prepare("Delete FROM user WHERE pseudo = :pseudo and mail = :mail");
          $req->execute(array(
                "pseudo" => $this->_pseudo,
                "mail" => $this->_mail
          ));
          $result = ($req->errorCode() == "00000");
          if(!$result) {
            print_r($req->errorInfo());
          }
          return $result;
        } else{
          return false;
        }
      }

      public function update(){
        /*
        $sql ="UPDATE `SuperAdmin` SET `,`pass`= ?, WHERE 1";
        $result = $dbh->prepare($sql);
        $result->execute(array($this->_pwd)); 
        $array = $result->fetchAll(\PDO::FETCH_NAMED);
          print_r($array);
            return count($array)==1;
        */
      }

      public function searchByEmail(){
        $dbh = DBSingleton::getInstance()->getConnection();
        $mail ="select * from user where mail = ?";
        $result = $dbh->prepare($mail);
        $result->execute(array($this->_mail)); 
        $array = $result->fetchAll(\PDO::FETCH_NAMED);
        return count($array)==1;

        }

      public function searchByPseudo(){
        $dbh = DBSingleton::getInstance()->getConnection();
        $pseudo ="select * from user where pseudo = ?";
        $result = $dbh->prepare($pseudo);
        $result->execute(array($this->_pseudo)); 
        $array = $result->fetchAll(\PDO::FETCH_NAMED);
        return count($array)==1;
      }
      /*
      public function validatemail() {

        if ($mail == preg_match(/^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z0-9][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/)){
          echo 'email valide';
        }
        else {
          echo 'email invalide';
        }
      }
      */

}


?>