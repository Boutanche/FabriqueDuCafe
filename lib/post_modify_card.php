<?php

if (!empty($_POST)) {
    if (isset($_POST['modifier'])) {
        if ($_POST['modifier'] == 'card_modification') {
            $req_modify_card = $bdd->prepare
            ('UPDATE customer SET 
                     lastname = :nom,
                     firstname = :prenom,
                     mail = :mail, 
                     tel = :tel, 
                     adresse = :adresse, 
                     cp = :codepostal, 
                     city = :ville, 
                     fidel_point = :fidel_point,
                     comment = :comment
                 WHERE 
                    id_customer = :id'
            );
            $req_modify_card->bindParam(':id', $_POST['id_customer']);
            $req_modify_card->bindParam(':nom', $_POST['card_lastname']);
            $req_modify_card->bindParam(':prenom', $_POST['card_firstname']);
            $req_modify_card->bindParam(':mail', $_POST['card_email']);
            $req_modify_card->bindParam(':tel', $_POST['card_phone']);
            $req_modify_card->bindParam(':adresse', $_POST['card_adresse']);
            $req_modify_card->bindParam(':codepostal', $_POST['card_cp']);
            $req_modify_card->bindParam(':ville', $_POST['card_city']);
            $req_modify_card->bindParam(':fidel_point', $_POST['fidel_point']);
            $req_modify_card->bindParam(':comment', $_POST['card_comment']);
            $req_modify_card->execute();
            $number_modify = 1;
        }
    }
}

