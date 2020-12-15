<?php

require_once(__DIR__.'/../vendor/autoload.php');

 $player = new Player();
 $player->setInventory();
 assert($player->getInventory() == []);

 $scene = new Scene();
 $scene->setDescription("hero arrive en scene" );
 assert(is_string($scene->getDescription()));
 assert($scene->getDescription == "hero arrive en scene");


 $scene2 = new Scene();
 $scene2->setDescription("hero sort de la scene" );
 assert(is_string($scene2->getDescription()));
 assert($scene2->getDescription == "hero sort de la scene");

 $scene3 = new Scene();
 $scene3->setDescription("hero meurt" );
 assert(is_string($scene3->getScenes()));
 assert($scene3->getDescription == "hero meurt");


 $player->addObject("lampe");
 assert($player->getInventory() == ["lampe"]); //=> renvoyer true car objet a été créé
 assert($player->getInventory() == ["bol"]); //=> renvoyer false car objet n'a pas été créé

 $choice = new $Choice("aller a droite", $scene2);
 $choice2 = new $Choice("aller a gauche", $scene3);
 $choice3 = new $Choice("utilise la lampe", $scene4);
 $scene->addChoice($choice);
 $scene->addChoice($choice2);

            //a dans son inventaire
 if($player->asInInventory == ["lampe"]){
     $scene->setChoice($choice3);
     assert($scene->userChoice($choice3) == "utilise la lampe");
 }

 assert($scene->userChoice($choice) == "aller a droite");
 assert($scene->userChoice($choice2) == "aller a gauche");



//mettre les if sous forme de test avec assert. Les if seront utilisés en prod

 if($scene->getUserChoice() == $choice) {
     assert($player->getActuelScene() == $scene2);
 }elseif($scene->getUserChoice() == $choice2){
    assert($player->getActuelScene() == $scene3);
 }elseif($scene->getUserChoice() == $choice3){
    assert($player->getActuelScene() == $scene4);
 }

 $scene->getUserChoice() == $choice;
 assert($player->getActuelScene() == $scene2);

 $scene->getUserChoice() == $choice2
 assert($player->getActuelScene() == $scene3);

<<<<<<< HEAD
 $scene->getUserChoice() == $choice3
 assert($player->getActuelScene() == $scene4);
=======
 if($scene->getUserChoice() == $choice) {
     assert($player->getActuelScene() == $scene2);
 }elseif($scene->getUserChoice() == $choice2){
    assert($player->getActuelScene() == $scene3);
 }elseif($scene->getUserChoice() == $choice3){
    assert($player->getActuelScene() == $scene3);
 }
>>>>>>> a145fa4b8e9707b751c14f8169bc7126451513ff
