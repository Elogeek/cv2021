<?php
use App\Manager\ArticleManager;

session_start();

require_once './include.php';

$controller = new HomeController();
$controller->index();

