<?php

require __DIR__ . '/utils.php';

require __DIR__ . '/auth/AuthHelper.php';
require __DIR__ . '/auth/SessionAuth.php';

require __DIR__ . '/controller/Controller.php';
require __DIR__ . '/controller/LoginPostController.php';
require __DIR__ . '/controller/LogoutController.php';
require __DIR__ . '/controller/JWKController.php';

$url      = strtok($_SERVER['REQUEST_URI'], '?');
$response = '';

if ($_POST) {
    switch ($url) {
        case '/login':
            $response = (new LoginPostController(new SessionAuth($usersPass)))->handle($_REQUEST);
            break;
        default:
            $response = "The POST `$url` doesn't exist!";
            break;
    }
} else {
    switch ($url) {
        case '/logout':
            $response = (new LogoutController(new SessionAuth($usersPass)))->handle($_REQUEST);

            break;
        case '/jwk':
            $response = (new JWKController())->handle($_REQUEST);

            break;
        default:
            $response = "The GET `$url` doesn't exist!";
            break;
    }
}

echo $response;
