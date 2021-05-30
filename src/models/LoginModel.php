<?php

namespace models;

class LoginModel
{
    const USER = 'pedromelem';
    const KEY = 'ph193456';
    public function login($user, $key)
    {
        if ($user == self::USER && $key == self::KEY)
            return true;
        else
            return false;
    }
}
