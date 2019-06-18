<?php

interface AuthHelper {
    public function isLogged(): bool;
    public function login(array $request): array;
    public function logout();
    public function get(string $key);
    public function startUserSession(array $userData);
}