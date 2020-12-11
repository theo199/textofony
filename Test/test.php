<?php

require_once(__DIR__.'/../vendor/autoload.php');

 $player = new Player();
 $player->setinventory();
 assert($player->getinventory() == []);

 $page = new Page();
 $page->setpage();
 assert(is_string($page->getpage()));

 
 $player->add_object("lampe");
 assert($player->getinventory == ["lampe"]);