<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page de connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctionsJS.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JQUERY/jquery-3.1.1.min.js"></script>
</head>
<body>
<?php
if(isset($_POST['FormConnexion']))
{
    $loginconnexion = htmlspecialchars($_POST['loginconnexion']);
    $passeconnexion = sha1($_POST['passeconnexion']);
    if(!empty($loginconnexion) AND !empty($passeconnexion))
    {
        
    }
    else
    {
        $erreur = "Tous les champs doivent etre complétés !";
    }
}

?>

<h1> Connexion </h1>

<form method="post" action="">
    <table>
        <tr>
            <td>
                <input type="text" placeholder=Login name="loginconnexion"  />
            </td>
        </tr>
        <tr>
            <td>
                <input type="password" placeholder="Password" name="passeconnexion"/>
            </td>
        </tr>
        <tr>
            <td>
            <br>
                <input type="submit" name="FormConnexion" value="Connexion"/>
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