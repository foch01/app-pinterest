<?php
namespace Entity;

class User
{
      private $_id;
      private $_pseudo;
      private $_mail;
      private $_pwd;
      private $_key;

      public function __construct($pseudo, $pwd){
        $this->_pseudo = $pseudo;
        $this->_pwd = $pwd;
      }
      public function connect(){
        
        $dsn = 'mysql:dbname=mixterest; host=127.0.0.1';
        $user ='red';
        $password = 'admin';
        $dbh = new \PDO($dsn, $user, $password);
        $sql = "select * from user where pseudo = '$this->_pseudo' and pass='$this->_pwd'";
          
        $result = $dbh->query($sql);
        print_r($result->fetchAll(\PDO::FETCH_NAMED));

        return $result;
      }
  }

/*public function validatemail () {

  if (preg_match(^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z0-9][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$)){
echo 'email valide';
  }
else {
  echo 'email invalide';
}
}*/



?>