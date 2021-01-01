<?php

namespace Textofony;

class Scene{

  private $description;
  private $choice = [];
  private $userChoice;
  private $page;

  public function __construct($page = ""){
    $this->page = $page;
  }

  public function getPage(){
    return $this->page;
  }

  public function setDescription($description){
    $this->description = $description;
  }

  public function getChoice(){
    return $this->choice;
  }

  public function getDescription(){
    return $this->description;
  }

  public function addChoice($choix){
    $choice = $this->choice;
    array_push($choice, $choix);
    $this->choice = $choice;
  }

  public function userChoice($choix){
    $choice = $this->choice;
    foreach ($choice as $key => $value) {
      if ($value == $choix) {
        $this->userChoice = $choix;
        return $choix;
      }
    }
  }

public function getAllChoice(){
  return count($this->choice);
}

public function getUserChoice(){
      return $this->userChoice;
    }


}
