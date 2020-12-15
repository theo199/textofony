<?php

require_once(__DIR__.'/../vendor/autoload.php');

 $player = new Player();
 $player->setinventory();
 assert($player->getinventory() == []);

 $page = new Page();
 $page->setpage("1", "hero arrive en scene" );
 assert(is_string($page->getpages()));
 assert($page->getpage_by_id("1") == "hero arrive en scene");


 $player->add_object("lampe");
 assert($player->getinventory == ["lampe"]);

 $page->setchoice("1", "1", "aller a droite");
 $page->setchoice("1", "2", "aller a gauche");
 assert($page->user_choice("1") == "aller a droite");
 assert($page->user_choice("2") == "aller a gauche");
