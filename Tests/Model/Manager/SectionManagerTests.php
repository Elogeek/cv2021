<?php

use App\Entity\User;
use App\Manager\SectionManager;
use App\Manager\UserManager;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

require_once $_SERVER['DOCUMENT_ROOT'] . '/Tests/Dumper.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/User.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/Section.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/SectionManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/UserManager.php';

// Return a user by id
$userManager = new UserManager();
$user = $userManager->getById(2);
Dumper::dieAndDump($user);

// Add user
$role = $user->getRole();
$user = new User(null,'bubulle', '',$role, );
$userManager->addUser($user);

// Return a definition by id
$sectionManager = new SectionManager();
$x = $sectionManager->getDefByUser($user);
Dumper::dieAndDump($x);


