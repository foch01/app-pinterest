<?php

namespace Entity;

class User
{
<<<<<<< HEAD
  private $_id;
  private $_pseudo;
  private $_mail;
  private $_pwd;
  private $_key;

    public function __construct($id, $pseudo, $mail){
        $this->_pseudo = $pseudo;
        $this->_id = $id;
        $this->_mail = $mail;
    }
    public function getMail(){
        return $this->_mail;
    }
    
}

?>

=======
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
        $sql = "select * from user where pseudo = ?  and pass = ?";
        $result = $dbh->prepare($sql);
        $result->execute(array($this->_pseudo, $this->_pwd)); 
        $array = $result->fetchAll(\PDO::FETCH_NAMED);
        return count($array)==1;
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
>>>>>>> 0e7d3141046df68122a8999d0a20105d73a13ac8
