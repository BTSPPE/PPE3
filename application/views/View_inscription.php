<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Inscription</title>
        <link rel="stylesheet" href="<?php echo base_url();?>Bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url();?>CSS/StyleInscription.css">
        <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JS/MesFonctions.js"></script>
    </head>
    <body>
        <h1>Inscription</h1><br>
        <p>
            on
            <label>Nom</label> <input type='text' id='txtNom'><br><br>
            <label>Login</label> <input type='text' id='txtLogin'><br><br>
            <label>Mot de passe</label> <input type='password' id='txtMdp'><br><br>
            <input type='button' id='boutoninscription' value='Créer un compte' onclick='Ajoutinscription()'>
        </p>
    </body>
</html>