<?php
$message_modal_test = "Putain !";
if(!empty($_POST)){
    var_dump($_POST);

    if (isset($_POST['id_customer'])){
        $this_card_id = $_POST['id_customer'];
    }
}