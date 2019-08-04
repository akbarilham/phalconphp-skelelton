<?php
use Phalcon\Mvc\Router;

$router = new Router();
$router->add(
    '/users/update/:id',
    [
        'namespace' => 'controllers',
        'id' => 1
    ]
);
return $router;