<?php

$reponse = $bdd->query('SELECT * FROM page');

$ar_page = array();
while ($donnees = $reponse->fetch()) {
    $ar_page[$donnees['key_file']] = $donnees;
}

if (isset($_GET['page']) && !empty($_GET['page'])) {
    if (array_key_exists($_GET['page'], $ar_page)) {
        $page = $_GET['page'];
    }
}
$metatitle = $ar_page[$page]['metatitle'];
$metadescription = $ar_page[$page]['metadescription'];
$keywords = $ar_page[$page]['keywords'];
$h1 = ($ar_page[$page]['h1']);
$h2 =($ar_page[$page]['h2']);
$menuTitre = ($ar_page[$page]['menu']);
$navbar = ($ar_page[$page]['navbar']);


$message_modal_admin = "Vous n'avez pas validé votre saisie";

/**
 * ONLY FOR PRODUCTION /// NOT USE IN LOCALHOST
 */
/*

        $metatitle = utf8_encode($metatitle);
        $metadescription =utf8_encode($metadescription);
        $keywords = utf8_encode($keywords);
        $h1 = utf8_encode($h1);
        $h2 = utf8_encode($h2);
        $menuTitre = utf8_encode($menuTitre);
        $navbar = utf8_encode($navbar);
*/