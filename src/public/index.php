<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../config/index.php';
require_once __DIR__ .  '/../models/books.php';
require_once __DIR__ . '/../handlers/exceptions.php';

$app = new \Slim\App($config);

$app->get('/books', function (Request $request, Response $response) {
   // return $response->getBody()->write(Library::all()->toJson());
    $data = array('name' => 'Rob', 'age' => 40);
    $newResponse = $response->withJson($data, 201);
    return $newResponse;
});

$app->get('/books/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});

$app->run();
