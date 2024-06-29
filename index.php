<?php
include "bootstrap/init.php";
// echo "front controller";
// front controller
echo $_SERVER["REQUEST_URI"] . "<br>";

new App\Core\Request;
echo "<br>";
var_dump($_ENV);