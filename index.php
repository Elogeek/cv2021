<?php

use App\Manager\ArticleManager;


session_start();

require_once './include.php';


if(isset($_GET['controller'])) {
    switch($_GET['controller']) {
        case 'articles':
            $controller = new ArticleController();

            if(isset($_GET['action'])) {
                switch($_GET['action']) {
                    case 'new' :
                        $controller->addArticle();
                        break;

                    case 'read':
                        $controller->readArticle($_GET['article']);
                        break;

                    case 'readAll':
                        $controller->articles();
                        break;


                    case 'delete':
                        $controller->deleteArticle();
                        break;

                    default:
                        break;
                }
            }
            else {

                $controller->articles();
            }
            break;
        default:
            break;
    }
}
else {
    $controller = new HomeController();
    $controller->index();
    $controller->articles();
}