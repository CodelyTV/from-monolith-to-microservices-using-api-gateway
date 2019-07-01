<?php

require __DIR__ . '/auth/AuthHelper.php';
require __DIR__ . '/auth/SessionAuth.php';

require __DIR__ . '/controller/Controller.php';
require __DIR__ . '/controller/AuthorsGetController.php';
require __DIR__ . '/controller/CoursesGetController.php';
require __DIR__ . '/controller/PathsGetController.php';
require __DIR__ . '/controller/RelatedCoursesGetController.php';
require __DIR__ . '/controller/PricingPlanGetController.php';

require __DIR__ . '/middleware/AuthMiddleware.php';

$url      = strtok($_SERVER['REQUEST_URI'], '?');
$urlPath  = explode('/', $url)[1];
$response = '';
$request  = array_merge($_REQUEST, ['REQUEST_URL' => $url, 'REQUEST_URL_PATH' => $urlPath]);

if ($_POST) {
    $response = "The POST `$url` doesn't exist!";
} else {
    switch ($urlPath) {
        case '':
            break;
        case 'authors':
            $response = (new AuthMiddleware(new AuthorsGetController(), new SessionAuth()))->handle($request);

            break;
        case 'courses':
            $response = (new AuthMiddleware(new CoursesGetController(), new SessionAuth()))->handle($request);

            break;
        case 'paths':
            $response = (new AuthMiddleware(new PathsGetController(), new SessionAuth()))->handle($request);

            break;
        case 'related-courses':
            $response = (new AuthMiddleware(new RelatedCoursesGetController(), new SessionAuth()))->handle($request);

            break;
        case 'pricing-plan':
            $response = (new AuthMiddleware(new PricingPlanGetController(), new SessionAuth()))->handle($request);

            break;
        default:
            $response = "The GET `$url` doesn't exist!";
            break;
    }
}

echo $response;
