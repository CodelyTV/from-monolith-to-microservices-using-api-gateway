<?php

declare(strict_types = 1);

final class LogoutController extends Controller
{
    private $helper;

    public function __construct(AuthHelper $helper)
    {
        $this->helper = $helper;
    }

    public function handle(array $request): string
    {
        if (!$this->helper->isLogged()) {
            header('HTTP/1.0 401 Unauthorized');
            echo 'Invalid credentials!';
            exit;
        }

        $this->helper->logout();

        return 'Bye!';
    }
}
