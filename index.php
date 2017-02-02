<?php 

require_once __DIR__ . "/autoloader.php";

use lib\mvc\router;

$kernel = new Router($_GET);
$controller = $kernel->getController();
