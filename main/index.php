<?php
require_once __DIR__ . "/src/core/router.php";

$router = new Router();

# Add routes
/* exemple route
$router->addRoute(["GET"],
                   "/",
                   "HomeController");
*/

$router->matchRoute($_SERVER["REQUEST_URI"]);

?>