<?php

declare(strict_types = 1);

final class LoginPostController extends Controller
{
    private $helper;

    public function __construct(AuthHelper $helper)
    {
        $this->helper = $helper;
    }

    public function handle(array $request): string
    {
        if (!$this->helper->isLogged()) {
            $userData = $this->helper->login($request);
            if (sizeof($userData) === 0) {
                header('HTTP/1.0 401 Unauthorized');
                echo 'Invalid credentials!';
                exit;
            }
            $this->helper->startUserSession($userData);
        }

        return 'Logged in!';
    }
}
