<?php /*session_start() ;
$_SESSION['adresse'] = $_POST['adresse'] ;*/


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

          
        public function create(){
          $no_error = true;
          
          $no_error = ($this->searchByEmail() == false);
          $no_error = $no_error && ($this->searchByPseudo() == false);

          if($no_error){
            // INSERT DANS DB
          }
          else{
            $_SESSION['error_msg'] = "Cet utilisateur est déjà existant";
            return false;
          }
        }

  


      public function connect(){
        $dsn = 'mysql:dbname=mixterest; host=127.0.0.1';
        $user ='red';
        $password = 'admin';
        $dbh = new \PDO($dsn, $user, $password);
        $sql = "select * from user where pseudo = ?  and pass = ?";
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

    public function searchByEmail(){
        $dsn = 'mysql:dbname=mixterest; host=127.0.0.1';
        $user ='red';
        $password = 'admin';
        $dbh = new \PDO($dsn, $user, $password);
        $mail ="select * from user where mail = ?";
        $result = $dbh->prepare($mail);
        $result->execute(array($this->_mail)); 
        $array = $result->fetchAll(\PDO::FETCH_NAMED);
          print_r($array);
            return count($array)==1;

        }

    public function searchByPseudo(){
      return true;
    }

    public function ChangePass(){
        $dsn = 'mysql:dbname=mixterest; host=127.0.0.1';
        $user ='red';
        $password = 'admin';
        $dbh = new \PDO($dsn, $user, $password);
        $sql ="UPDATE `user` SET `,`pass`= ?, WHERE 1";
        $result = $dbh->prepare($sql);
        $result->execute(array($this->_pwd)); 
        $array = $result->fetchAll(\PDO::FETCH_NAMED);
          print_r($array);
            return count($array)==1;

        }

    
  }


?>