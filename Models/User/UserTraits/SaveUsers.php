<?php

namespace app\Models\User\UserTraits;

trait SaveUsers
{
    public static array $users = [];

    public static function addUser($user)
    {
        self::$users[] = $user;
    }

    public static function showAllUsers()
    {
        var_dump(self::$users);

    }
}