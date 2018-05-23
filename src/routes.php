<?php

use Slim\Http\Request;
use Slim\Http\Response;
use Src\Rdiff\Statistics\Statistics;

// Routes

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $a = Statistics::getInstance()->getInfo();
    $this->logger->info("Slim-Skeleton '/' route");
    $this->logger->info("Slim-Skeleton '/".var_export( $response,true)."' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', ['test']);
});
