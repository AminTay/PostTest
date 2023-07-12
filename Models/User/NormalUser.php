<?php

namespace app\Models\User;

use app\Models\User\UserTraits\LikePost;

class NormalUser extends BaseUser
{

    use LikePost;

    public function __construct($username)
    {
        parent::__construct($username, $this);
    }
}