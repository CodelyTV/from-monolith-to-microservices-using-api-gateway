<?php

declare(strict_types = 1);

final class LoginPostController extends Controller
{
    private static $usersPass = [
        'alombarte' => 'tupu',
        'dani'      => 'supu',
    ];

    public function handle(array $request): string
    {
        if (!is_logged() || !credentials_are_valid()) {
            header('WWW-Authenticate: Basic realm="My Realm"');
            header('HTTP/1.0 401 Unauthorized');
            echo 'Invalid credentials!';
            exit;
        }

        return 'Logged in!';
    }
}
