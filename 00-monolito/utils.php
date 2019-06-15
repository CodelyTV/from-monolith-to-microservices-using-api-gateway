<?php

function is_logged(): bool
{
    return isset($_SERVER['PHP_AUTH_USER']);
}

function credentials_are_valid(): bool
{
    $usersPass = [
        'alombarte' => 'tupu',
        'dani'      => 'supu',
    ];

    $possibleUser = $_SERVER['PHP_AUTH_USER'];
    $possiblePass = $_SERVER['PHP_AUTH_PW'];

    if (!isset($usersPass[$possibleUser])) {
        return false;
    }

    return $usersPass[$possibleUser] === $possiblePass;
}
