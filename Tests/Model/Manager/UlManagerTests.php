<?php


use App\Entity\Ul;
use App\Manager\UlManager;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

require_once $_SERVER['DOCUMENT_ROOT'] . '/Tests/Dumper.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/Ul.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/UlManager.php';

// Return a list via id in the BDD
$uManager =  new UlManager();
$ul = $uManager->getListById(1);
Dumper::dieAndDump($ul);

// Return all definition in the BDD
$uManager =  new UlManager();
$ul = $uManager->getContentAll();
if($ul) {
    echo "tous est là<br>";
    echo("<pre>");
    print_r($ul); echo"</pre>";
}
else {
    echo "Erreur<br>";
    die();
}

// Add content list in the BDD
$newList = new Ul(null,'trois','lorem lorem lorem');
$uManager->addContentList($newList);
if($newList) {
    echo "ajout dans la BDD<br>";
}
else {
    echo "Error<br>";
    die();
}

// Return last content liste
$uManager->getLastContentList($newList);

// Delete content list in the BDD
$uManager->deleteList($newList);
if($newList){
    echo "Liste supprimée<br>";
}
else {
    echo "la dév est super conne<br>";
}

echo "it's finish!!!<br>";