<?php

namespace Entity;

class User
{
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

