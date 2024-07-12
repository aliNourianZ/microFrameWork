<?php

use App\Core\Request;
use App\Core\Routing\Router;
use App\Utilities\Asset;
use App\Utilities\Urls;

include "bootstrap/init.php";
// echo "front controller";
// front controller
// echo $_SERVER["REQUEST_URI"] . "<br>";

// new App\Core\Request;
// echo "<br>";
// var_dump($_ENV);
// echo site_url("panel/users") . "<br>";
// echo Urls::current() . "<br>";
// echo random_array([1,2,3,4,5,6,7,8,9]) . "<br>";
// $request = new Request();
// var_dump($request);
// echo "<br>";
// echo $request->ip(). "<br>";
// echo $request->name;
$router = new Router();

?>
<link rel="stylesheet" href="<?= Asset::css("style.css") ?>">  <!--- we can use assets_url() function in helpers too --->
