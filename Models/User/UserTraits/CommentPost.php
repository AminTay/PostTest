<?php

namespace app\Models\User\UserTraits;

use app\Models\Comment\Comment;
use app\Models\Post\Post;

trait CommentPost
{
    public function commentPost(Post $post, string $commentText)
    {

        $post->addComment(new Comment($commentText, $this));
    }
}