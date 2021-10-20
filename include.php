<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/View/-partials/menu.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/View/-partials/section.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/View/-partials/footer.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/User.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/Article.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/Role.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/UserManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/RoleManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/ArticleManager.php';


require_once $_SERVER['DOCUMENT_ROOT'] . '/Controller/HomeController.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Controller/ArticleController.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/php/connect.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/php/disconnect.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/php/register.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/Tests/Dumper.php';

