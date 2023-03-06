<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Routing\RouteCollectorProxy;
use App\Controllers\Api\V1\UserController;
use App\Controllers\Api\V1\Store\OrderController;

$app->get('/', function (Request $request, Response $response): Response
{
    // $response->getBody()->write('Hello World');
    $response->getBody()->write(file_get_contents(ROOT_PATH . '/views/index.html'));

    return $response;
});

$app->get('/api/documentation', function (Request $request, Response $response): Response
{
    $response->getBody()->write(file_get_contents(ROOT_PATH . '/views/api/documentation.html'));

    return $response;
});


$app->group('/api/v1', function (RouteCollectorProxy $group) {
    $group->group('/store', function (RouteCollectorProxy $group) {
        $group->group('/orders', function (RouteCollectorProxy $group) {
            $group->get('/{order}', [OrderController::class, 'find']);
            $group->post('', [OrderController::class, 'store']);
            $group->delete('/{order}', [OrderController::class, 'delete']);
        });
    });

    $group->group('/users', function (RouteCollectorProxy $group) {
        $group->get('', [UserController::class, 'index']);
        $group->get('/{username}', [UserController::class, 'find']);
        $group->post('', [UserController::class, 'store']);
        $group->patch('/{username}', [UserController::class, 'update']);
        $group->delete('/{username}', [UserController::class, 'delete']);
    });
});