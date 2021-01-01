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

$player->startStory($scene);



$_SESSION['Player'] = $player;
$_SESSION['scene'] = $scene;
$_SESSION['scene2'] = $scene2;
$_SESSION['choice'] = $choice;
$_SESSION['choice2'] = $choice2;
$_SESSION['actualScene'] = $actualScene;

 ?>
