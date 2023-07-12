<?php

namespace app\Models\User\UserTraits;

use app\Models\Post\Post;

trait LikePost
{
    public function likePost(Post $post)
    {

        $post->likePost();
    }
}