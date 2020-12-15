<?php

namespace Textofony;

class Scene{

  private $description;
  private $choice = [];
  

  public function setDescription($description){
    $this->description = $description;
  }

  public function getDescription(){
    return $this->description;
  }

  public function addChoice($choix){
    $choice = $this->choice;
    array_push($choice, $choix);
  }

}
