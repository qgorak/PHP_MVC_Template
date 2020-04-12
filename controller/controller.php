<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function listPosts()
{
    $postManager = new PostManager(); // Création d'un objet
    $posts = $postManager->getPosts(); // Appel d'une fonction de cet objet

    require('views/indexView.php');
}

function post()
{
    $id = $_GET['id'];
    $postManager = new PostManager();
    $commentManager = new CommentManager();
    $post = $postManager->getPost($id);
    $comments = $commentManager->getComments($_GET['id']);

    require('views/postView.php');


}
