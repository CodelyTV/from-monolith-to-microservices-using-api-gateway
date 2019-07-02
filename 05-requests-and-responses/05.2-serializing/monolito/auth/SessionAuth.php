<?php

declare(strict_types = 1);

final class SessionAuth implements AuthHelper
{
    const USER_ID = 'user_id';
    const ROLES = 'roles';
    const OTHER = 'other';

    public function isLogged(): bool
    {
        return isset($_SERVER["HTTP_AUTHORIZATION"]);
    }

    public function login(array $request): array
    {
    }

    public function startUserSession(array $userData)
    {
    }

    public function logout()
    {
    }

    public function get(string $key)
    {
        $tokenParts = explode('.', $_SERVER["HTTP_AUTHORIZATION"]);
        $userData = json_decode(base64_decode($tokenParts[1]));

        return $userData[$key];
    }
}
