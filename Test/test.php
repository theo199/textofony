<?php

require_once(__DIR__.'/../vendor/autoload.php');

 $player = new Player();
 $player->setinventory();
 assert($player->getinventory() == []);

 $scene = new Scene();
 $scene->setscene($scene, "hero arrive en scene" );
 assert(is_string($scene->getscenes()));
 assert($scene->getscene($scene) == "hero arrive en scene");


 $scene2 = new Scene();
 $scene2->setscene($scene2, "hero sort de la scene" );
 assert(is_string($scene2->getscenes()));
 assert($scene2->getscene($scene2) == "hero sort de la scene");

 $scene3 = new Scene();
 $scene3->setscene($scene3, "hero meurt" );
 assert(is_string($scene3->getscenes()));
 assert($scene3->getscene($scene3) == "hero meurt");


 $player->add_object("lampe");
 assert($player->getinventory == ["lampe"]);

 $choice = new $Choice("aller a droite", $scene2);
 $choice2 = new $Choice("aller a gauche", $scene3);
 $choice3 = new $Choice("utilise la lampe", $scene4);
 $scene->setchoice($choice);
 $scene->setchoice($choice2);
 if($player->getinventory == ["lampe"]){
     $scene->setchoice($choice3);
     assert($scene->user_choice($choice3) == "utilise la lampe");
 }

 assert($scene->user_choice($choice) == "aller a droite");
 assert($scene->user_choice($choice2) == "aller a gauche");


 if($scene->getUserChoice() == $choice) {
     assert($player->getActuelScene() == $scene2);
 }elseif($scene->getUserChoice() == $choice2){
    assert($player->getActuelScene() == $scene3);
 }elseif($scene->getUserChoice() == $choice3){
    assert($player->getActuelScene() == $scene3);
 }
