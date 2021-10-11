<?php

use Controller\SectionController;
use Model\Manager\SectionManager;
use Model\User\UserManager;
use Model\Entity\Role;

require_once $_SERVER['DOCUMENT_ROOT'] . '/include.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);



    // Créer un home controller qui ne fait que afficher la vue home.
    $controller = new HomeController();
    $controller->index();

