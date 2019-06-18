<?php

require __DIR__ . '/auth/AuthHelper.php';
require __DIR__ . '/auth/SessionAuth.php';

require __DIR__ . '/controller/Controller.php';
require __DIR__ . '/controller/AuthorsGetController.php';
require __DIR__ . '/controller/CoursesGetController.php';
require __DIR__ . '/controller/PathsGetController.php';

require __DIR__ . '/middleware/AuthMiddleware.php';

$url      = strtok($_SERVER['REQUEST_URI'], '?');
$response = '';

if ($_POST) {
    $response = "The POST `$url` doesn't exist!";
} else {
    switch ($url) {
        case '/':
            break;
        case '/authors':
            $response = (new AuthMiddleware(new AuthorsGetController(), new SessionAuth()))->handle($_REQUEST);

            break;
        case '/courses':
            $response = (new AuthMiddleware(new CoursesGetController(), new SessionAuth()))->handle($_REQUEST);

            break;
        case '/paths':
            $response = (new AuthMiddleware(new PathsGetController(), new SessionAuth()))->handle($_REQUEST);

            break;
        default:
            $response = "The GET `$url` doesn't exist!";
            break;
    }
}

echo $response;
