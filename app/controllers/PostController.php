<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Post;
class PostController extends Controller
{

public function showPosts() 
{ 
    $postModel = new Post(); 
    $template = $this -> twig ->load('posts/posts.twig'); 
    $homepageData = [ 
        'posts' => $postModel->getAllPosts(),

    ]; 
    echo $template -> render($homepageData);
}


}