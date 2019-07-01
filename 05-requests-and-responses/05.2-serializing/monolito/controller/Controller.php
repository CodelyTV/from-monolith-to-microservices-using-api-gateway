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

    protected function xmlResponse(array $response): string
    {
        header('Content-Type: text/xml');

        return xmlrpc_encode($response);
    }

    protected function notFoundResponse(string $message): string
    {
        header('HTTP/1.0 404 Not Found');
        echo $message;
        exit;
    }

    protected function hasResourceId(array $request): bool
    {
        return null !== $this->extractResourceId($request);
    }

    protected function resourceId(array $request): string
    {
        return $this->extractResourceId($request);
    }

    private function extractResourceId(array $request): ?string
    {
        $urlParts = explode('/', $request['REQUEST_URL']);

        if (count($urlParts) > 2) {
            return $urlParts[2];
        }

        return null;
    }
}
