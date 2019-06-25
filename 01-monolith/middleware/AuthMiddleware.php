<?php

declare(strict_types = 1);

final class AuthMiddleware
{
    private $controller;
    private $helper;

    public function __construct(Controller $controller, AuthHelper $helper)
    {
        $this->controller = $controller;
        $this->helper = $helper;
    }

    public function handle(array $request): string
    {
        if (!$this->helper->isLogged()) {
            header('HTTP/1.0 401 Unauthorized');
            echo 'Unauthorized!!!';
            exit;
        }

        return $this->controller->handle($request);
    }
}
