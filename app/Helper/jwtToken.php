<?php

namespace App\Helper;

class jwtToken
{
public function encodeToken($email)
{
    $key = '123abc';
    $payload = [
        'iss' => 'carental',
        'iat' => time(),
        'exp' => time()+60*60
    ];

}

public function decodeToken($token)
{

}
}
