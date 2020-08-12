<?php
if(!empty($_POST)) {
    if (isset($_POST['add_point'])) {
        $id_customer = $_POST['add_point'['id']];
        echo($id_customer);
        include_once('../config/config_lafabrique_fidel.php');
        $req_one_point = $bdd->prepare('UPDATE customer SET fidel_point =  WHERE id_customer = :id');
        $req_one_point->execute(array('id' => $id_customer));
        $ThisCard = $req_one_point->fetch();
        $ThisCardJson = json_encode($ThisCard);
    }
    else{
    }
    echo($ThisCardJson);
};