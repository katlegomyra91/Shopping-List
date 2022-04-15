<?php
require_once("controllers/IndexController.php");
$controller = new IndexController();
$pageData = $controller->getPageData();
require_once($pageData["load_view"]);
