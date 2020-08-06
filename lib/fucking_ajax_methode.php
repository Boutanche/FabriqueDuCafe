<?php
if(!empty($_GET)) {
    echo (var_dump($_GET));
    if (isset($_GET['customer_id'])) {
        include_once('../config/config_lafabrique_fidel.php');
        $req_UserCard = $bdd->prepare('SELECT * FROM customer WHERE id_customer = :id');
        $req_UserCard->execute(array('id' => $_GET['customer_id']));
        $ThisCard = $req_UserCard->fetch();
        $message_modal_test = 'We are in ajax_methode.php';
    }
    else{
        $message_modal_test =("coucou");
    }
    echo(var_dump($ThisCard));
}