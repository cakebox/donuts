<?php

namespace Donuts;

require_once __DIR__ . "/../vendor/autoload.php";

use Silex\Application;
use Symfony\Component\HttpFoundation\JsonResponse;

define("APPLICATION_ENV", getenv("APPLICATION_ENV") ?: "production");

$app = new Application();

if (APPLICATION_ENV != "production") {
    $app["debug"] = true;
}

require_once __DIR__ . '/../config/configuration.php';

// Include controllers and models
foreach (glob(__DIR__ . "/*.php", GLOB_BRACE) as $file) {
    require_once $file;
}

$app->error(function (\Exception $e, $code) use ($app) {
    return new JsonResponse(["status_code" => $code, "message" => $e->getMessage()]);
});

return $app;
