<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>page de recuperation des variables</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php

// Verification de variable dans les champs
if(isset($_POST['login']) && isset($_POST['nomUser']) && isset($_POST['passe']) && isset($_POST['passe2']) && isset($_POST['mail']))
{
{

    echo 'Votre login est '.$_POST['login'].' Et votre mot de passe est '.$_POST['passe'];

}

// Verifie si l'utilisateur a bien entré des mdps identiques
$passe = mysql_real_escape_string(htmlspecialchars($_POST['passe']));
$passe2= mysql_real_escape_string(htmlspecialchars($_POST['passe2']));

if ($passe == $passe2)
{
$identifiant= my_real_escape_string(htmlsepcialchars($_POST['login']));
$email= my_real_escape_string(htmlsepcialchars($_POST['mail']));

// crypter le mdp
$passe = sha1($passe);

mysql_query(" INSERT INTO user values('','$identifiant', '$passe', '$email')");
}

else 
{
    echo 'Les deux mots de passe que vous avez rentrés ne correspondent pas';
}
}





?>


</body>
</html>