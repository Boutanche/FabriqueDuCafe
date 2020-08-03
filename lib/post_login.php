<?php
if(!empty($_POST)){
    if (isset($_POST['formulaire'])){
        if($_POST['formulaire'] == 'login'){
            $message_log = "Le formulaire est vide";
            if(isset($_POST['log']) AND isset($_POST['pass'])) {
                $message_log = "post n'est pas vide et contient login et password";
                if (!empty($_POST['log']) and !empty($_POST['pass'])) {
                    $req_log = $bdd->prepare('SELECT login, password, fk_id_role FROM user WHERE login = :login');
                    $req_log->execute(array(
                        'login' => $_POST['log']));
                    $resultat_login = $req_log->fetch();
                    //Comparaison du pass
                    $isPasswordCorrect = password_verify($_POST['pass'], $resultat_login['password']);
                    if(!$resultat_login) {
                        $message_log = "Mauvais mot de passe ou identifiant";
                        $page = 'no_log';
                    }
                    else{
                        if($isPasswordCorrect){
                            $_SESSION['login'] = $_POST['log'];
                            $_SESSION['user_level'] = $resultat_login['fk_id_role'];
                            $message_log = "Bravo " . $_SESSION['login'] . " vous êtes connecté!";
                            $page = 'home';
                        }
                        else {
                            $message_log = "Identifiant ou mot de passe invalide";
                            $page = 'no_log';
                        }
                    }
                }
            }
        }
    }
}