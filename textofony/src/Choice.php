<?php

namespace Textofony;

class Choice{

  private $description;
  private $nextScene;


  public function __construct($description, $nextScene){
    $this->description = $description;
    $this->$nextScene = $nextScene;
  }

}
