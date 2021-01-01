<?php
require_once(__DIR__.'/../../vendor/autoload.php');

session_start();

$actualScene = $_SESSION['Player']->getActuelScene();
$choice = $_SESSION['actualScene']->getChoice();



echo $actualScene->getDescription()."</br>";
foreach ($choice as $key => $value) {
  $nextScene = $value->getNextScene();
  echo "<a href = ".$nextScene->getPage().">".$value->getDescription()."</br>";
}
