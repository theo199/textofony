<?php
require_once(__DIR__.'/../../vendor/autoload.php');

session_start();

$_SESSION['Player']->setActualScene($_SESSION['scene3']);
$actualScene = $_SESSION['Player']->getActuelScene();
$choice = $actualScene->getChoice();

echo $actualScene->getDescription()."</br>";
if($_SESSION['Player']->hasInInventory("lampe")){
foreach ($choice as $key => $value) {
  echo "<a href = ".$nextScene->getPage().">".$value->getDescription()."</br>";
}
}else {
  echo "vous ete mort";
}
