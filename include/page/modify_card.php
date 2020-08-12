<?php
include ('./include/layout/topbar.php');
include ('./include/layout/sidebar.php');
include ('./include/layout/heading.php');
include('./lib/post_modify_card.php');
?>
<div class="card-body">
    <?php
    if(!empty($_POST)) {
        if (isset($_POST['id_userCard'])) {
            $req_this_cards = $bdd->prepare('SELECT * FROM customer WHERE id_customer = :id');
            $req_this_cards->execute(array(
                'id' => $_POST['id_userCard']));
            $resultat_thisCard = $req_this_cards->fetch();
            }
        else {
            echo ('Il y a un soucis');
        }
    }?>
    <hr>
    <form class="user" action="./index.php?page=modify_card" method="POST" id="card_modification">
        <input type="hidden" name="modifier" value="card_modification"/>
        <div class="row">
            <div class="form-group col-6">
                <label>Nom du propriétaire de la carte <span>*</span></label>
                <input type="text" class="form-control form-control-user" name="card_lastname" value="<?php echo ($resultat_thisCard['lastname'])?>">
            </div>
            <div class="form-group col-6">
                <label>Prénom du propriétaire de la carte<span>*</span></label>
                <input type="text" class="form-control form-control-user" name="card_firstname" value="<?php echo ($resultat_thisCard['firstname'])?>">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="form-group col-4">
                <label>E-mail</label>
                <input type="text" class="form-control form-control-user" name="card_email" value="<?php echo ($resultat_thisCard['mail'])?>">
            </div>
            <div class="form-group col-4">
                <label>Téléphone</label>
                <input type="text" class="form-control form-control-user" name="card_phone" value="<?php echo ($resultat_thisCard['tel'])?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-4">
                <label>Adresse</label>
                <input type="text" class="form-control form-control-user" name="card_adresse" value="<?php echo ($resultat_thisCard['adresse'])?>">
            </div>
            <div class="form-group col-4">
                <label>Code Postal</label>
                <input type="text" class="form-control form-control-user" name="card_cp" value="<?php echo ($resultat_thisCard['cp'])?>">
            </div>
            <div class="form-group col-4">
                <label>Ville</label>
                <input type="text" class="form-control form-control-user" name="card_city" value="<?php echo ($resultat_thisCard['city'])?>">
            </div>
        </div>
        <div class="row-cols-3">
            <label>Nombre de points à la création <span>*</span></label>
            <input type="text" class="form-control form-control-user" name="fidel_point" value="<?php echo ($resultat_thisCard['fidel_point'])?>">
        </div>
        <hr>
        <!-- Non implémenté :
        <div class="row">
            <div class="form-group">
                <label>Machines possédées :</label>
                <div class="col">
                    <div class="custom-checkbox">
                        <label class="custom-checkbox" for="1">Aéropress : </label>
                        <input type="checkbox" name="type_machine" value="1" class="custom-checkbox" id="machine_1">
                        <label class="custom-checkbox" for="machine_2">Automatique : </label>
                        <input type="checkbox" name="type_machine" value="2" class="custom-checkbox" id="machine_2">
                        <label class="custom-checkbox" for="machine_3">Chemex : </label>
                        <input type="checkbox" name="type_machine" value="3" class="custom-checkbox" id="machine_3">
                        <label class="custom-checkbox" for="machine_4">Dripper : </label>
                        <input type="checkbox" name="type_machine" value="4" class="custom-checkbox" id="machine_4">
                        <label class="custom-checkbox" for="machine_5">Expresso : </label>
                        <input type="checkbox" name="type_machine" value="5" class="custom-checkbox" id="machine_5">
                        <label class="custom-checkbox" for="machine_6">Italienne : </label>
                        <input type="checkbox" name="type_machine" value="6" class="custom-checkbox" id="machine_6">
                        <label class="custom-checkbox" for="machine_7">Piston : </label>
                        <input type="checkbox" name="type_machine" value="7" class="custom-checkbox" id="machine_7">
                        <label class="custom-checkbox" for="machine_8">Syphon : </label>
                        <input type="checkbox" name="type_machine" value="8" class="custom-checkbox" id="machine_8">
                    </div>
                </div>
            </div>
        </div>
        -->
        <div class="row">
            <label>Commentaires : </label>
            <input type="text" class="form-control form-control-user" name="card_comment" value="<?php echo ($resultat_thisCard['comment'])?>">
        </div>
        <hr>
        <div class="row-cols-3">
            <label>Numéro de carte <span>*</span></label>
            <input type="text" class="form-control form-control-user" name="id_customer" value="<?php echo ($resultat_thisCard['id_customer'])?>">
        </div>
        <button type="submit" class="btn btn-primary btn-user btn-block">
           Enregistrer les modifications
        </button>
        <hr>
    </form>
</div>
<?php $number_modify = $number_modify +1 ; ?>
