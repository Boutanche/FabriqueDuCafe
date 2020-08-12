<!DOCTYPE html>
<html lang="FR_fr">
        <head>
            <?php
            if ($number_modify >0){
                echo "<meta http-equiv='refresh' content='0; url = ./index.php?page=modify_card'>";
            }
            else {
                echo "";
            }
            ?>
            <meta charset="UTF-8">
            <meta http-equiv="content-type" content="text/html"; charset="UTF-8"/>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="<?php echo $metadescription;?>">
            <meta name="author" content="La Fabrique du Café et son stagiaire">
            <title><?php echo $metatitle;?></title>
            <link href="./img/favicon.ico" rel="shortcut icon"/>
            <!-- Custom fonts for this template-->
            <link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
            <link href="./vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
            <!-- Custom styles for this template-->
            <link href="./css/sb-admin-2.css" rel="stylesheet">
            <!--  My css Custom for La Fabrique Du Café -->
            <link href="./css/main.css" rel="stylesheet">
        </head>
        <!-- Attention  : Ici le template body avait un id ="page-top" -->
    <body>

