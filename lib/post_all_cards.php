<?php
$req_all_cards = $bdd->query("SELECT * FROM customer");
$ar_all_card = array();
while ($data_card = $req_all_cards->fetch()){
    $ar_all_card[$data_card['id_customer']]= $data_card;
}

