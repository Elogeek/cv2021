<?php

use App\Entity\User;
use App\Manager\ArticleManager;
use App\Manager\UserManager;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

require_once $_SERVER['DOCUMENT_ROOT'] . '/Tests/Dumper.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/User.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/Article.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/ArticleManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/UserManager.php';

// Return si une article est null ou pas
$manager = new ArticleManager();
$manager->get(1);
if($manager){
    echo" l'article existe";
}

$manager->addArticles("feer");
if($manager){
    print_r($manager);
}
/*
$manager->deleteArticle();
$manager->getAllArticles();
*/