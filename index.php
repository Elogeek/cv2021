<?php

use App\Controller\UlController;
use App\Model\Manager\UlManager;
use App\Model\User\UserManager;
use App\Model\Entity\Role;

require_once $_SERVER['DOCUMENT_ROOT'] . '/include.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_GET['controller'])) {
    switch ($_GET['controller']) {
        case 'articles':
            $controller = new UlController();

            switch ($_GET['action']) {
                case 'new' :
                    $controller->addList($_POST);
                    break;

                case 'read':
                    if (isset($_GET['list'])) {
                        // $controller->readNow();
                    }
                    break;

                case 'update':
                    if (isset($_GET['list'])) {
                        //$manager->updateList($_GET['list']);
                    } else {
                        //$manager->updateList();
                    }
                    break;

                case 'delete':
                    // $manager->deleteList();
                    break;

                default:
                    break;
            }

            break;

        }
    }
    // Créer un home controller qui ne fait que afficher la vue home.
    else {
        $controller = new HomeController();
        $controller->index();
    }
