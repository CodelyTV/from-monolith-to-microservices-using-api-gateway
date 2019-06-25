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
        $userData = $this->helper->login($request);
        if (sizeof($userData) === 0) {
            header('HTTP/1.0 401 Unauthorized');
            echo 'Invalid credentials!';
            exit;
        }
        
        return $this->jsonResponse(
            [
                "access_token" => [
                    "aud" => "http://api.company.com",
                    "iss" => "http://monoli.th",
                    "sub" => $request['username'],
                    "jti" => uniqid('', true),
                    "roles" => $userData['roles'],
                    "exp" => time() + 1800, // 30 minutes
                    "other_data" => $userData['other']
                ]
            ]
        ); 
    }
}
