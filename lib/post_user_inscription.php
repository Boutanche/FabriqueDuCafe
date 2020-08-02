<?php
$message_user_inscription = 'Pas de données saisies';
//valider les informations :
if(!empty($_POST)) {
    if (isset($_POST['formulaire'])) {
        if ($_POST['formulaire'] == 'user_inscription') {
            if (isset($_POST['user_login']) and isset($_POST['user_password'])) {
                //Hachage du mot de passe
                $pass_hash = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
                //Insertion
                $req_insert_user = $bdd->prepare('INSERT INTO user (login, password, fk_id_role) VALUES (:login, :password, :role)');
                $req_insert_user->execute(array(
                    'login' => $_POST['user_login'],
                    'password' => $pass_hash,
                    'role' => $_POST['user_level']
                ));
                $message_user_inscription = 'Inscription réalisée';
            }
        }
    }
}
