<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctionsJS.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JQUERY/jquery-3.1.1.min.js"></script>
</head>
<body>
<?php

if (isset($_POST['FormInscription']))
{
    $nomUtilisateurs = htmlspecialchars($_POST['nomUtilisateurs']);
    $login = htmlspecialchars($_POST['login']);
    $mdp = sha1($_POST['passe']);

    if(!empty($_POST['nomUtilisateurs']) AND !empty($_POST['login']) AND !empty($_POST['passe']))
    {
       $nomUtilisateurslength = strlen($nomUtilisateurs);
       if($nomUtilisateurs <= 255)
       {
           
           $erreur="votre compte a bien été crée";
           //header('Location: Connexion.php');     Permet de renvoyer l'utilisateur a la page de connexion apres inscriptions
       }
    }
    else
    {
        $erreur ="Tous les champs doivent etre complétés";
    }
}

?>

<h1> Inscription </h1>

<form method="post" action="">
    <table>
        <tr>
            <td>
                <input type="text" placeholder="Nom + Prenom:" name="nomUtilisateurs" value="<?php if (isset($nomUtilisateurs)) {echo $nomUtilisateurs;}?>" />
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" placeholder="Login" name="login" value="<?php if (isset($login)) {echo $login;}?>"/>
            </td>
        </tr>
        <tr>
            <td>
                <input type="password" placeholder="Password" name="passe"/>
            </td>
        </tr>
        <tr>
        
            <td>
            <br>
                <input type="submit" name="FormInscription" value="Inscription"/>
            </td>
        </tr>
    </table>

</form>
<?php
if(isset($erreur))
{
    echo '<font color="red">' .$erreur."</font>";
}
?>



</body>
</html>