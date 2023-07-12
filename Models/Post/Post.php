<?php

namespace app\Models\Post;

use app\Models\Comment\Comment;

class Post
{
    public string $postText;
    public array $comments;
    public int $likes;
    public static array $allPosts = [];

    public function __construct(string $postText)
    {
        $this->postText = $postText;
        $this->comments = [];
        $this->likes = 0;

        self::$allPosts[] = $this;
    }

    public function addComment(Comment $comment)
    {
        $this->comments[] = $comment;

    }

    public function likePost()
    {
        $this->likes++;
    }

    public function getCommentsNumber()
    {
        return count($this->comments);
    }

    public function getAllComments()
    {
        if (count($this->comments) == 0) {
            echo "No comments for this post!\n";
            return;
        }

        echo "Comments: \n";
        foreach ($this->comments as $comment) {
            /** @var $comment Comment
             **/
            echo $comment->user->username . ": " . $comment->commentText . "\n";
        }
    }

    public function getLikesNumber()
    {
        echo "Post Likes: " . $this->likes . "\n";
    }

    public function __toString()
    {
        $str = $this->postText . "\n" .
            "Likes:" . $this->likes . "\n" .
            "Comments:\n";
        if (count($this->comments) == 0) {
            $str .= "No Comments \n\n\n";
            return $str;
        }
        foreach ($this->comments as $comment) {
            $str .= $comment . "\n";
        }
        $str .= "\n\n\n";
        return $str;
    }
}