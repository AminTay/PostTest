<?php

namespace app\Models\Comment;


use app\Models\User\BaseUser;

class Comment
{
    public string $commentText;
    public BaseUser $user;

    public function __construct(string $commentText, BaseUser $user)
    {
        $this->commentText = $commentText;
        $this->user = $user;
    }


    public function __toString()
    {
        return $this->user->username.": ".$this->commentText;
    }
}