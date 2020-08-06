<?php
session_start();
header('content-type: text/html; charset=utf-8');
include_once ('./config/config_lafabrique_fidel.php');
include ('./lib/get_page.php');
include ('./lib/post_login.php');
//Inscription d'un nouvel utilisateur :
//TODO : L'insérer dans la page admin : Ici, preprod pour test Jacques Chirac.
//include ('./include/admin/user_inscription.php');
include('./include/layout/head.php');
include('./include/page/'.$page.'.php');
include('./include/layout/footer.php');


