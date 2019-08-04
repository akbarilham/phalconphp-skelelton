<?php

use Phalcon\Mvc\Micro;
use Phalcon\Mvc\Micro\Collection as MicroCollection;
include __DIR__ . "./controllers.php";

$app = new Micro();

// Define the routes here
$app->get(
	'/hello',
	function() {
		echo '<h1>Welcome!</h1>';
	}
);

$users = new MicroCollection();
$users->setHandler(new Controllers());
$users->setPrefix('/users');
$users->get('/select', 'Show');
$users->get('/find-pagination/{id}', 'FindPagination');
$users->post('/insert', 'Insert');
$users->post('/update/{id}', 'Update');
$users->delete('/delete/{id}', 'Delete');
$app->mount($users);

$app->notFound(function () use ($app) {
    $app->response->setStatusCode(404, "Not Found")->sendHeaders();
    echo 'The page that you want to access is not found!';
});

$app->handle();