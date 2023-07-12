<?php

namespace app\Models\User;

use app\Models\User\UserTraits\CommentPost;
use app\Models\User\UserTraits\LikePost;

class SilverUser extends BaseUser
{

    use LikePost;
    use CommentPost;

    public function __construct($username)
    {
        parent::__construct($username, $this);
    }
}