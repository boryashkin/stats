<?php

require '../vendor/autoload.php';

$app = new Slim\App();

$app->get('/api/log/', function ($request, \Slim\Http\Response $response, $args) {
    return $response->withStatus(403);
});

$app->post('/api/log/event', function ($request, $response, $args) {
    return $response->getBody()->write('{}');
});

$app->run();