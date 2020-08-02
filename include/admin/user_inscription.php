<?php include ('./lib/post_user_inscription.php');?>
<form class="user" action="./index.php" method="POST" id="user_inscription">
    <input type="hidden" name="formulaire" value="user_inscription"/>
    <div class="form-group">
        <input type="text" class="form-control form-control-user" name="user_login" aria-describedby="emailHelp" placeholder="Enter login...">
    </div>
    <div class="form-group">
        <input type="password" class="form-control form-control-user" name="user_password" placeholder="Enter Password">
    </div>
    <div class="form-group">
        <div class="custom-control custom-checkbox small">
            <label class="custom-radio" for="level_1">Admin</label>
            <input type="radio" name="user_level" value="1" class="custom-radio" id="level_1">
            <label class="custom-radio" for="level_2">Utilisateur</label>
            <input type="radio" name="user_level" value="2" class="custom-radio" id="level_2">
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-user btn-block">
        Inscrire un utilisateur
    </button>
    <hr>
</form>
<?php echo ($message_user_inscription); ?>