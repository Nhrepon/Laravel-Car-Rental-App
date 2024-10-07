<?php

namespace App\Helper;
use Firebase\JWT\JWT;

class jwtToken
{
    public static function encodeToken($email, $role)
{
    $key = '123abc';
    $payload = [
        'iss' => 'Carental',
        'iat' => time(),
        'email' => $email,
        'role' => $role
    ];
    return JWT::encode($payload, $key, 'HS256');

}

public static function decodeToken($token)
    {
    try {
        $key = '123abc';
        $decoded = JWT::decode($token, $key, ['HS256']);
        return $decoded;
    } catch ( Throwable $e) {
        return false;
    }

}








}
