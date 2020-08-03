<div class="card-body">
    <hr>
    <form class="user" action="./index.php?page=create_card" method="POST" id="card_creation">
        <input type="hidden" name="formulaire" value="card_creation"/>
        <div class="row">
            <div class="form-group col-6">
                <label>Nom du propriétaire de la carte <span>*</span></label>
                <input type="text" class="form-control form-control-user" name="card_lastname" placeholder="Nom...">
            </div>
            <div class="form-group col-6">
                <label>Prénom du propriétaire de la carte<span>*</span></label>
                <input type="text" class="form-control form-control-user" name="card_firstname" placeholder="Prénom...">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="form-group col-4">
                <label>E-mail</label>
                <input type="text" class="form-control form-control-user" name="card_email" placeholder="exemple@exemple.com">
            </div>
            <div class="form-group col-4">
                <label>Téléphone</label>
                <input type="text" class="form-control form-control-user" name="card_phone" placeholder="0600000000">
            </div>
        </div>
        <div class="row">
                <div class="form-group col-4">
                    <label>Adresse</label>
                    <input type="text" class="form-control form-control-user" name="card_adresse" placeholder="Numéro + Nom de la rue...">
                </div>
                <div class="form-group col-4">
                    <label>Code Postal</label>
                    <input type="text" class="form-control form-control-user" name="card_cp" placeholder="87000">
                </div>
                <div class="form-group col-4">
                    <label>Ville</label>
                    <input type="text" class="form-control form-control-user" name="card_city" placeholder="Limoges...">
                </div>
        </div>
        <div class="row-cols-3">
            <label>Nombre de points à la création <span>*</span></label>
            <input type="text" class="form-control form-control-user" name="fidel_point" placeholder="0 or <= 16">
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
            <textarea type="text" class="form-control form-control-user" name="card_comment">Votre commentaire ici : </textarea>
        </div>
        <hr>
        <button type="submit" class="btn btn-primary btn-user btn-block">
            Enregistrer la nouvelle carte
        </button>
        <hr>
    </form>
    <?php echo $message_creation_card;?>

</div>