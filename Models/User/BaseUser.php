<?php

namespace app\Models\User;


use app\Models\User\UserTraits\SaveUsers;

class BaseUser
{
    use SaveUsers;

    public string $username;

    public function __construct($username, $user)
    {
        $this->username = $username;

        self::addUser($user);
    }

    public function __destruct()
    {

    }

}