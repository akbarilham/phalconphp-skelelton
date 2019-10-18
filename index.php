<?php

use Phalcon\Mvc\Micro;
use Phalcon\Mvc\Micro\Collection as MicroCollection;
use Phalcon\Http\Response;
include __DIR__ . "./controllers.php";

$app = new Micro();

$app->get(
    "/",
    function () {
        echo "<h1>Welcome!</h1>";
    }
);

// Define the routes here
$app->get(
	'/hello/{name}',
	function ($name) use ($app) {
		echo '<h1>Welcome! $name</h1>';
	}
);

// Return a response
$app->get(
    '/welcome/index',
    function () {
        $response = new Response();

        $response->setStatusCode(401, 'Unauthorized');
        $response->setContent('Access is not authorized');

        return $response;
    }
);

// $example = new MicroCollection();
// $example->setHandler(new Controllers());
// $example->setPrefix('/example');
// $example->get('/select', 'Show');
// $example->get('/find-pagination/{id}', 'FindPagination');
// $example->post('/insert', 'Insert');
// $example->post('/update/{id}', 'Update');
// $example->delete('/delete/{id}', 'Delete');
// $app->mount($example);
$app->notFound(
	function () use ($app) {
		$app->response->setStatusCode(404, 'Not Found');
		$app->response->sendHeaders();
		$message = 'Nothing to see here. Move along....';
		$app->response->setContent($message);
		$app->response->send();
    }
);

$app->handle();