<?php
//TODO : Rename :
if(!empty($_GET)) {
    if (isset($_GET['id'])) {
        include_once('../config/config_lafabrique_fidel.php');
        $req_UserCard = $bdd->prepare('SELECT * FROM customer WHERE id_customer = :id');
        $req_UserCard->execute(array('id' => $_GET['id']));
        $ThisCard = $req_UserCard->fetch();
        $ThisCardJson = json_encode($ThisCard);
    }
    else{
    }
    echo($ThisCardJson);
}