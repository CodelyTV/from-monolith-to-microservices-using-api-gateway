<?php

declare(strict_types = 1);

final class SessionAuth implements AuthHelper
{
    const USER_ID = 'user_id';
    const ROLES = 'roles';
    const OTHER = 'other';

    private $usersPass;

    public function __construct(array $usersPass)
    {
        $this->usersPass = $usersPass;
    }

    public function isLogged(): bool
    {
        return isset($_SERVER["HTTP_AUTHORIZATION"]);
    }

    public function login(array $request): array
    {
        $possibleUser = $request['username'];
        $possiblePass = $request['pwd'];

        if (!isset($this->usersPass[$possibleUser])) {
            return [];
        }

        if ($this->usersPass[$possibleUser]['pwd'] !== $possiblePass) {
            return [];
        }

        return [
            self::USER_ID => $possibleUser,
            self::ROLES => $this->usersPass[$possibleUser]['roles'],
            self::OTHER => $this->usersPass[$possibleUser]['other']
        ];
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
