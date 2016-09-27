<?php
namespace Entity;


class SuperAdmin
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
    
    public function connectDB() {
        $dsn = 'mysql:dbname=app-pinterest; host=127.0.0.1';
        $user ='root';
        $password = 'facesimplon';
        $dbh = new \PDO($dsn, $user, $password);
    }
    
    public function connectUser(){
        $this->connectDB();
        $sql = "select * from user where pseudo = ?  and pass = ?";
        $result = $dbh->prepare($sql);
        $result->execute(array($this->_pseudo, $this->_pwd)); 
        $temp= $result->fetchAll(\PDO::FETCH_NAMED);
        return count($temp)==1;
    }
    
 
    public function createAdmin(){
        
        $dsn = 'mysql:dbname=app-pinterest; host=127.0.0.1';
        $user ='root';
        $password = 'facesimplon';
        $dbh = new \PDO($dsn, $user, $password);
        
        $no_error = true;
        
        $no_error = ($this->searchByEmail() == false);
        $no_error = $no_error && ($this->searchByPseudo() == false);

            if($no_error){
              $this->connectUser();
              $req = $dbh->prepare("INSERT INTO Admin (pseudo, pass, mail) VALUES (:pseudo, :pass, :mail)");
                  $req->execute(array(
                        "pseudo" => $this->_pseudo,
                        "pass" => $this->_pwd,
                        "mail" => $this->_mail
                  ));
            } else{
              $_SESSION['error_msg'] = "Cet utilisateur est déjà existant";
              return false;
            }
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

    public function searchByEmail(){
        $dsn = 'mysql:dbname=app-pinterest; host=127.0.0.1';
        $user ='root';
        $password = 'facesimplon';
        $dbh = new \PDO($dsn, $user, $password);
        $mail ="select * from SuperAdmin where mail = ?";
        $result = $dbh->prepare($mail);
        $result->execute(array($this->_mail)); 
        $array = $result->fetchAll(\PDO::FETCH_NAMED);
          print_r($array);
            return count($array)==1;

        }

    public function searchByPseudo(){
        $dsn = 'mysql:dbname=app-pinterest; host=127.0.0.1';
        $user ='root';
        $password = 'facesimplon';
        $dbh = new \PDO($dsn, $user, $password);
        $pseudo ="select * from SuperAdmin where pseudo = ?";
        $result = $dbh->prepare($pseudo);
        $result->execute(array($this->_pseudo)); 
        $array = $result->fetchAll(\PDO::FETCH_NAMED);
          print_r($array);
            return count($array)==1;
    }

    public function ChangePass(){
        $dsn = 'mysql:dbname=app-pinterest; host=127.0.0.1';
        $user ='root';
        $password = 'facesimplon';
        $dbh = new \PDO($dsn, $user, $password);
        $sql ="UPDATE `SuperAdmin` SET `,`pass`= ?, WHERE 1";
        $result = $dbh->prepare($sql);
        $result->execute(array($this->_pwd)); 
        $array = $result->fetchAll(\PDO::FETCH_NAMED);
          print_r($array);
            return count($array)==1;

        }

    
  }


?>