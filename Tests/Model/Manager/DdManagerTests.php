<?php

use App\Entity\User;
use App\Manager\DdManager;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

require_once $_SERVER['DOCUMENT_ROOT'] . '/Tests/Dumper.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/Dd.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/DdManager.php';


// Return id of the définition in the DBB
$dManager =  new DdManager();
$dd = $dManager->getDefById(1);

// Return all definition in the DBB
$d = $dManager->getDefinition();
Dumper::dieAndDump($dd);

if($d) {
    echo "les définitions sont ici<br>";
}
else {
    echo "Erreur<br>";
    die();
}