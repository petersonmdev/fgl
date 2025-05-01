<?php
require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/config.php';

use App\Controllers\NotFoundController;

ini_set('display_errors', 1);
error_reporting(E_ALL);

$routes = require __DIR__ . '/../src/Routes/routes.php';
$uri = trim($_SERVER['REQUEST_URI'], '/');
$found = false;

foreach ($routes as $pattern => [$controller, $action]) {
    $regex = "#^" . $pattern . "$#";

    if (preg_match($regex, $uri, $matches)) {
        array_shift($matches);
        (new $controller())->$action(...$matches);
        $found = true;
        break;
    }
}

if (!$found) {
    http_response_code(404);
    (new NotFoundController())->index();
}