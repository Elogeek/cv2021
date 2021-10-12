<?php

use App\Entity\User;
use App\Manager\UserManager;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

require_once $_SERVER['DOCUMENT_ROOT'] . '/Tests/Dumper.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/User.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/Role.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/UserManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/RoleManager.php';

// Return a user by id
$userManager = new UserManager();
$user = $userManager->getById(2);
Dumper::dieAndDump($user);

// Add user
$role = $user->getRole();
$user = new User(null,'bubulle', '',$role, );
$userManager->addUser($user);

if($user->getId()) {
    echo "Le role  de l'utilisateur a bien été ajouté<br>";
}
else {
    echo "Erreur en ajoutant l'utilisateur<br>";
    die();
}

// Return all users
$allUsers = $userManager->getAllUsers();
if($allUsers){
    echo " tout le monde est là<br>";
}
else {
    echo "Oups aucun users ici<br>";
    die();
}

// Return an User by his user name or null
$exists = $userManager->existUser('bubulle');
if($exists){
    echo " Email user existe <br>";
}
else {
    echo "Erreur email user not existe<br>";
    die();
}

// Test getByUsername()
$user = $userManager->getByUsername('Bubulle');
// Test update user.
if(is_null($userManager->getByUsername('ELO'))) {
    $user->setUsername('Bubu');
    $result = $userManager->updateUser($user);
}
else {
    echo "Nom déjà prise.<br>";
}

if($result) {
    echo "user mis à jour<br>";
}
else {
    echo "user pas mis à jour<br>";
    die();
}

// Test update password.
$result = $userManager->updatePassword($user , '123Abc');
if($result) {
    echo 'mot de passe modifié<br>';
}
else {
    echo " erreur lors de la modification du mot de passe<br>";
    die();
}

//delete user
if($userManager->deleteUser($user)) {
    echo "User supprimé<br>";
}
else {
    echo "User pas supprimé<br>";
    die();
}


echo "<br>TOUTE LA CLASSE EST OK !<br>";

