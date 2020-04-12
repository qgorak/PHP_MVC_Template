<?php
require('controller/controller.php');


if (isset($_GET['action'])) {
switch($_GET['action'])
{
 case 'listPosts':
  listPosts();;
  break;

 case 'post':
 if (isset($_GET['id']) && $_GET['id'] > 0) {
     post();

 }
 else {
     echo 'Erreur : aucun identifiant de billet envoyé';
 }
  break;

 default :
  listPosts(); ;
  break;
  //test
}
}
