<?php

/**
* Display the home page.
*/

function home() {
// Display the home page if no action asked in get params.
require_once $_SERVER['DOCUMENT_ROOT'] . '..//Controller/HomeController.php';
$controller = new HomeController();
$controller->index();
}
