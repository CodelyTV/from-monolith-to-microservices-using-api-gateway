<?php

declare(strict_types = 1);

final class AuthMiddleware
{
    private $controller;

    public function __construct(Controller $controller)
    {
        $this->controller = $controller;
    }

    public function handle(array $request): string
    {
        if (!is_logged()) {
            header('HTTP/1.0 401 Unauthorized');
            echo 'Unauthorized!!!';
            exit;
        }

        return $this->controller->handle($request);
    }
}
