<?php

declare(strict_types = 1);

abstract class Controller
{
    abstract public function handle(array $request): string;

    protected function jsonResponse(array $response): string
    {
        header('Content-Type: application/json');

        return json_encode($response);
    }
}
