<?php

namespace Entity;

class Bloc
{
  private $_id;
  private $_titre;
  private $_media_video;
  private $_media_image;
  private $_media_audio;
  private $date;
  private $format;


    public function __construct($id, $titre, $_media_video, $_media_audio, $_media_image, $date, $format){
        $this->_id = $id;
        $this->_titre = $titre;
        $this->_media_video = $_media_video;
        $this->_media_audio = $_media_audio;
        $this->_media_image = $_media_image;
        $this->_date = $date;
        $this->_format = $format;
    }
    
}

?>