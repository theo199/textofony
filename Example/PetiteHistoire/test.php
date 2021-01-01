<?php
require_once(__DIR__.'/../../vendor/autoload.php');


$player = new \Textofony\Player();
$player->setInventory();

$scene = new \Textofony\Scene("test.php");
$scene->setDescription("le hero est devant les bois");

$scene2 = new \Textofony\Scene("test2.php");
$scene2->setDescription("le hero ce retrouve au milieu de la forêt");

$choice = new \Textofony\Choice("aller a droite", $scene);
$choice2 = new \Textofony\Choice("aller a gauche", $scene2);

$player->startStory($scene);
$actualScene = $player->getActuelScene();
$actualScene->addChoice($choice);
$actualScene->addChoice($choice2);
$choice = $actualScene->getChoice();

echo $actualScene->getDescription()."</br>";
foreach ($choice as $key => $value) {
  $nextScene = $value->getNextScene();
  echo "<a href = ".$nextScene->getPage().">".$value->getDescription()."</br>";
}
