<?php

namespace Textofony;

class Player{

  private $inventory;

  public function setInventory(){
    $this->inventory = [];
  }

  public function getInventory(){
    return $this->inventory;
  }

  public function addObject($objet){
    $inventory = $this->inventory;
    array_push($inventory, $objet);
    $this->inventory = $inventory;
  }

  public function hasInInventory($objet){
    $inventory = $this->inventory;
    if (in_array($objet, $inventory)) {
      return true;
    }else {
      return false;
    }

  }

}
