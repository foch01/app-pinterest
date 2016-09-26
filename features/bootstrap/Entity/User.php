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
        public function UrlEntry(){

        }

      public function connect(){
        $dsn = 'mysql:dbname=app-pinterest; host=127.0.0.1';
        $user ='root';
        $password = 'facesimplon';
        $dbh = new \PDO($dsn, $user, $password);
        $sql = "select * from SuperUser where pseudo = ?  and pass = ?";
        $result = $dbh->prepare($sql);
        $result->execute(array($this->_pseudo, $this->_pwd)); 
        $temp= $result->fetchAll(\PDO::FETCH_NAMED);
        return count($temp)==1;
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