<?php

namespace app\Models\User\UserTraits;

use app\Models\Post\Post;

trait ArchivePost
{
    public array $archivedPosts = [];

    public function archiveAPost(Post $post)
    {
        $this->archivedPosts[] = $post;
    }

    public function getArchivedPosts()
    {
        return $this->archivedPosts;
    }

}