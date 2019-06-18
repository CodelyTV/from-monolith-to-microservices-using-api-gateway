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
        session_start();
        $this->usersPass = $usersPass;
    }

    public function isLogged(): bool
    {
        return $this->get(self::USER_ID) != '';
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
        foreach ($userData as $key => $value) {
            $_SESSION[$key] = $value;
        }
    }

    public function logout()
    {
        $_SESSION = array();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();
    }

    public function get(string $key)
    {
        return $_SESSION[$key];
    }
}
