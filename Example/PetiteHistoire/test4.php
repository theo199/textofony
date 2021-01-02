<?php
require_once(__DIR__.'/../../vendor/autoload.php');

session_start();

$_SESSION['Player']->setActualScene($_SESSION['scene4']);
$actualScene = $_SESSION['Player']->getActuelScene();
$choice = $actualScene->getChoice();

echo $actualScene->getDescription()."</br>";
foreach ($choice as $key => $value) {
  $nextScene = $value->getNextScene();
  echo "<a href = ".$nextScene->getPage().">".$value->getDescription()."</br>";
}
