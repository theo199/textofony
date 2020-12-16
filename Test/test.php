<?php

require_once(__DIR__.'/../vendor/autoload.php');

 $player = new \Textofony\Player();
 $player->setInventory();
 assert($player->getInventory() == []);

 $scene = new \Textofony\Scene();
 $scene->setDescription("hero arrive en scene" );
 assert(is_string($scene->getDescription()));
 assert($scene->getDescription() == "hero arrive en scene");


 $scene2 = new \Textofony\Scene();
 $scene2->setDescription("hero sort de la scene" );
 assert(is_string($scene2->getDescription()));
 assert($scene2->getDescription() == "hero sort de la scene");

 $scene3 = new \Textofony\Scene();
 $scene3->setDescription("hero meurt" );
 assert(is_string($scene3->getDescription()));
 assert($scene3->getDescription() == "hero meurt");

 $scene4 = new \Textofony\Scene();
 $scene4->setDescription("hero utilise la lampe" );
 assert(is_string($scene4->getDescription()));
 assert($scene4->getDescription() == "hero utilise la lampe");


 $player->addObject("lampe");
 assert($player->getInventory() == ["lampe"]); //=> renvoyer true car objet a été créé
 assert($player->getInventory() == ["bol"]); //=> renvoyer false car objet n'a pas été créé

 $choice = new \Textofony\Choice("aller a droite", $scene2);
 $choice2 = new \Textofony\Choice("aller a gauche", $scene3);
 $choice3 = new \Textofony\Choice("utilise la lampe", $scene4);
 $scene->addChoice($choice);
 $scene->addChoice($choice2);

            //a dans son inventaire
 if($player->hasInInventory("lampe")){
     $scene->addChoice($choice3);
     assert($scene->userChoice($choice3) == $choice3);
 }

 assert($scene->userChoice($choice) == $choice);
 assert($scene->userChoice($choice2) == $choice2);

 assert($scene->getAllChoice() == 3);



$scene->userChoice($choice);
 assert($player->getActuelScene() == $scene2);

 $scene->userChoice($choice2);
 assert($player->getActuelScene() == $scene3);



 //mettre les if sous forme de test avec assert. Les if seront utilisés en prod
 if($scene->getUserChoice() == $choice) {
     assert($player->getActuelScene() == $scene2);
 }elseif($scene->getUserChoice() == $choice2){
    assert($player->getActuelScene() == $scene3);
 }elseif($scene->getUserChoice() == $choice3){
    assert($player->getActuelScene() == $scene4);
 }
