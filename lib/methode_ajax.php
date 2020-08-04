<?php
$message_modal_test = "Putain !";
if(!empty($_GET)){
    $message_modal_test="Ta mère";
    if (isset($_GET['customer_id'])){
        $message_modal_test = "Lol!";
    }
    else {
        $message_modal_test = 'Caramba encore raté !' ;
    }

}