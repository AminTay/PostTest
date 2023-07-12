<?php

namespace app\Models\Post\PostTraits;

class Serializable
{
    public static string $file = "log.txt";

    public static function savePost($posts)
    {
        foreach ($posts as $post) {
            file_put_contents(self::$file, $post, FILE_APPEND);
        }
    }
}