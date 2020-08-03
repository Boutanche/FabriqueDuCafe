<?php
if(isset($_GET['deconnexion']) && $_GET['deconnexion'] == 1){
    $_SESSION = array();
    session_destroy();
    header("location:index.php");
}