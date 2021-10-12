<?php

use App\Entity\Dd;
use App\Entity\User;
use App\Manager\DdManager;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

require_once $_SERVER['DOCUMENT_ROOT'] . '/Tests/Dumper.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/Dd.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/DdManager.php';

// Return id of the définition in the BDD
$dManager =  new DdManager();
$dd = $dManager->getDefById(1);
Dumper::dieAndDump($dd);

// Return all definition in the BDD
$dManager =  new DdManager();
$dd = $dManager->getDefinition(1);
if($dd) {
    echo "les définitions sont ici<br>";
    echo("<pre>");
   print_r($dd); echo"</pre>";
}
else {
    echo "Erreur<br>";
    die();
}
// Add a definition in the BDD
$def = new Dd(null,'test','fhfye');
$dManager->addWord($def);
if($def) {
    echo "ajout<br>";
}
else {
    echo "Erreur<br>";
    die();
}
// Delete definition in the BDD
$dManager->deleteWord($def);

// It's OK
echo" je suis un génie, tout est ok";