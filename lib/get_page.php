<?php
$reponse = $bdd->query('SELECT * FROM page');
$ar_page = array();
while ($donnees = $reponse->fetch()) {
    $ar_page[$donnees['key_file']] = $donnees;
}
$page = 'no_log';
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

