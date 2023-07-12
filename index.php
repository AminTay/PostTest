<?php

namespace app;

use app\Models\Post\Post;
use app\Models\Post\PostTraits\Serializable;
use app\Models\User\GoldenUser;
use app\Models\User\NormalUser;
use app\Models\User\SilverUser;

require_once __DIR__ . '/vendor/autoload.php';

$post1 = new Post('Hello World!');
$post2 = new Post("Goodbye World!");
$post3 = new Post("World!");

$goldenUser1 = new GoldenUser('golden1');

$silverUser1 = new SilverUser('silver1');

$normalUser1 = new NormalUser('normal1');


$normalUser1->likePost($post1);
$silverUser1->likePost($post1);

$post1->getLikesNumber();
$post2->getLikesNumber();


$silverUser1->commentPost($post2, 'Very Good');
$goldenUser1->commentPost($post2, "Very Bad");

$post2->getAllComments();
$post1->getAllComments();


$post3->getLikesNumber();

Serializable::savePost(Post::$allPosts);