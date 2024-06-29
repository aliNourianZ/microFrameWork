<?php
include "vendor/autoload.php";
// echo "front controller";
// front controller
echo $_SERVER["REQUEST_URI"] . "\n";
new App\Core\Request;