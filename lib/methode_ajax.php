<?php
//include_once('../config/config_lafabrique_fidel.php');
$ThisCardJSON = array();
if(!empty($_GET)){
    if (isset($_GET['customer_id'])) {
        include_once('../config/config_lafabrique_fidel.php');
        $req_UserCard = $bdd->prepare('SELECT * FROM customer WHERE id_customer = :id');
        $req_UserCard->execute(array(
            'id_customer' => $_GET['customer_id']
        ));
        $ThisCardTrans = array();
        $ThisCard = $req_UserCard->fetch();
        $ThisCardTrans->id=$ThisCard['id_customer'];
        $ThisCardTrans->name = $ThisCard['lastname'];
        echo ($ThisCardTrans['name']);
        $ThisCardJSON = json_encode($ThisCardTrans);
    }

    else {
        $message_modal_test = 'Caramba !' ;
    }
echo ($ThisCardJSON);

}

