<?php

namespace App\Helper;
use Firebase\JWT\JWT;

class jwtToken
{
    public static function encodeToken($email)
{
    $key = '123abc';
    $payload = [
        'iss' => 'carental',
        'iat' => time(),
        'exp' => time()+60*60,
        'email' => $email
    ];
    return JWT::encode($payload, $key, 'HS256');

}

    public static function decodeToken($token)
{
try {
    $key = '123abc';
    $decoded = JWT::decode($token, $key, ['HS256']);
    return $decoded->email;
} catch ( Throwable $e) {
    return false;
}

}








}
