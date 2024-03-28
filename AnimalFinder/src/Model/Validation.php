<?php

namespace APP\Model;

class Validation
{
    public static function validateName(string $name):bool
    {
        return mb_strlen($name) > 4;
    }

    public static function validateColor(string $color):bool
    {
        return mb_strlen($color) > 2;
    }

    public static function validateHeight(float $height):bool
    {
        return $height > 0;
    }

    public static function validateAddress(string $address):bool
    {
        return mb_strlen($address) > 10;
    }

    public static function validateEmail(string $email):bool
    {
        return mb_strlen($email) > 10;
    }

    public static function validatePassword(string $password):bool
    {
        return mb_strlen($password) > 6;
    }
    
    public static function validateNumber(float $number): bool
    {
        return $number > 0;
    }
}
