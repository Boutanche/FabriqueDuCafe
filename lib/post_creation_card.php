<?php
$message_creation_card = "Vous n'avez pas encore crée de carte.";
$today = date("Y:m:d");
if (!empty($_POST)) {
    if (isset($_POST['formulaire'])) {
        if ($_POST['formulaire'] == 'card_creation') {
            $message_creation_card = "Le formulaire Création de carte est vide";
            if(isset($_POST['card_lastname']) AND isset($_POST['card_firstname'])) {
                $message_log = "Formulaire ce création de carte n'est pas vide et contient nom et prénom";
                if (!empty($_POST['card_lastname']) and !empty($_POST['card_firstname'])) {
                    $req_namecard_customer = $bdd->prepare('SELECT lastname, firstname FROM customer WHERE lastname = :lastname AND firstname = :firstname');
                    $req_namecard_customer->execute(array(
                        'lastname' => $_POST['card_lastname'],
                        'firstname' => $_POST['card_firstname']));
                    $control_lastname = $req_namecard_customer->fetch();
                    if (!$control_lastname['lastname']){
                        $req_add_card = $bdd->prepare
                        ('INSERT INTO customer 
                                (lastname,
                                 firstname,
                                 mail, 
                                 tel, 
                                 adresse, 
                                 cp, 
                                 city, 
                                 fidel_point,
                                 creation_date,
                                 comment)
                             VALUE 
                                (:nom,
                                 :prenom, 
                                 :mail, 
                                 :tel, 
                                 :adresse, 
                                 :codepostal,
                                 :ville,
                                 :fidel_point,
                                 :creation_date,
                                 :comment)'
                        );
                        $req_add_card->bindParam(':nom',$_POST['card_lastname']);
                        $req_add_card->bindParam(':prenom',$_POST['card_firstname']);
                        $req_add_card->bindParam(':mail',$_POST['card_email']);
                        $req_add_card->bindParam(':tel',$_POST['card_phone']);
                        $req_add_card->bindParam(':adresse',$_POST['card_adresse']);
                        $req_add_card->bindParam(':codepostal',$_POST['card_cp']);
                        $req_add_card->bindParam(':ville',$_POST['card_city']);
                        $req_add_card->bindParam(':fidel_point',$_POST['fidel_point']);
                        $req_add_card->bindParam(':creation_date',$today);
                        $req_add_card->bindParam(':comment',$_POST['card_comment']);
                        $req_add_card ->execute();
                        $message_creation_card ='Requtète exécutée : une carte crée';
                    }
                    else {
                        $message_creation_card ='Il existe déjà une carte portant ce nom et ce prénom ! Ajouter un surnom, ou un nombre au nom du client si vous voulez ajouter un homonyne';
                    }
                }
            }
        }
    }
}