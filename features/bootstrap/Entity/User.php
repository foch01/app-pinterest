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
  }

}
?>