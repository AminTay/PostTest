<?php

namespace app\Models\User;

use app\Models\User\UserTraits\ArchivePost;
use app\Models\User\UserTraits\CommentPost;
use app\Models\User\UserTraits\LikePost;

class GoldenUser extends BaseUser
{
    use LikePost;
    use CommentPost;
    use ArchivePost;

    public function __construct($username)
    {
        parent::__construct($username, $this);
    }
}