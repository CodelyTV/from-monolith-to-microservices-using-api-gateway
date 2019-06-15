<?php

require __DIR__ . '/utils.php';

require __DIR__ . '/controller/Controller.php';
require __DIR__ . '/controller/AuthorsGetController.php';
require __DIR__ . '/controller/CoursesGetController.php';
require __DIR__ . '/controller/PathsGetController.php';
require __DIR__ . '/controller/LoginPostController.php';

require __DIR__ . '/middleware/AuthMiddleware.php';

$url      = $_SERVER['PATH_INFO'];
$response = '';

if ($_POST) {
    switch ($url) {
        case '/login':
            $response = (new LoginPostController())->handle($_REQUEST);
            break;
        default:
            $response = "The POST `$url` doesn't exist!";
            break;
    }
} else {
    switch ($url) {
        case '/':
            break;
        case '/authors':
            $response = (new AuthMiddleware(new AuthorsGetController()))->handle($_REQUEST);

            break;
        case '/courses':
            $response = (new AuthMiddleware(new CoursesGetController()))->handle($_REQUEST);

            break;
        case '/paths':
            $response = (new AuthMiddleware(new PathsGetController()))->handle($_REQUEST);

            break;
        case '/login':
            $response = (new LoginPostController())->handle($_REQUEST);
            break;
        default:
            $response = "The GET `$url` doesn't exist!";
            break;
    }
}

echo $response;
