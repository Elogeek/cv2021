<?php
use App\Manager\UserManager;
use Model\DB;

require_once $_SERVER["DOCUMENT_ROOT"] . '/Model/DB.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/Model/Manager/Traits/ManagerTrait.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/Model/Entity/User.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/Model/Manager/UserManager.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/include.php';

session_start();


if (isset($_GET, $_GET["name"], $_GET["password"])) {
    $name = DB::secureData($_GET["name"]);
    $pass = DB::secureData($_GET["password"]);
    $userManager = new UserManager();
    $user = $userManager->getUser($name, $pass);
    if (is_string($user)) {
        //error === redirectoring page connect
        header("Location: index.php?error=" . $user . "&color=red");
    } else {
        //stock in the variable session
        $_SESSION["user"] = $user;
        print_r($_SESSION["user"]);
        header('Location: index.php?controller=articles');
    }
}