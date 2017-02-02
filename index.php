<?php 

// utk menampilkan pesan error atau warning
ini_set('display_errors', 1);
ini_set('log_errors', 0);
error_reporting(-1);

//utk debug, jika error maka array tidak kosong/ada isi errornya
/*register_shutdown_function(function() {
print_r(error_get_last());
});*/

require_once __DIR__ . "/autoloader.php";

use lib\mvc\router;

$kernel = new Router($_GET);
$controller = $kernel->getController();
