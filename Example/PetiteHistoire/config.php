<?php
require_once(__DIR__.'/../../vendor/autoload.php');

session_start();

$player = new \Textofony\Player();
$player->setInventory();

$scene = new \Textofony\Scene("test.php");
$scene->setDescription("le hero est devant les bois");

$choice = new \Textofony\Choice("aller a droite", $scene);
$choice2 = new \Textofony\Choice("aller a gauche", $scene2);

$scene->addChoice($choice);
$scene->addChoice($choice2);

$scene2 = new \Textofony\Scene("test2.php");
$scene2->setDescription("le hero ce retrouve au milieu de la forêt");

$choice3 = new \Textofony\Choice("retourner au debut des bois", $scene);
$choice4 = new \Textofony\Choice("aller a gauche", $scene3);
$choice5 = new \Textofony\Choice("prendre la lampe", $scene3);

$scene2->addChoice($choice3);
$scene2->addChoice($choice4);
$scene2->addChoice($choice5);

$scene3 = new \Textofony\Scene("test3.php");
$scene3->setDescription("la foret est trop sombre");

$choice6 = new \Textofony\Choice("utiliser la lampe", $scene4);
$choice7 = new \Textofony\Choice("retourner en arriere", $scene2);

$scene3->addChoice($choice6);
$scene3->addChoice($choice7);

$scene4 = new \Textofony\Scene("test4.php");
$scene4->setDescription("Bravo vous ete sortie !!");




$_SESSION['Player'] = $player;
$_SESSION['scene'] = $scene;
$_SESSION['scene2'] = $scene2;
$_SESSION['choice'] = $choice;
$_SESSION['choice2'] = $choice2;
$_SESSION['actualScene'] = $actualScene;

 ?>
