<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formule d'inscription</title>
   <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <script src="JS/fonctionJS.js"></script>
    <script src="JQuery/jquery-3.1.1.js"></script>
</head>
<body>


<h1> Inscription </h1>

<form method="post" action="login.php">

<label> Nom Utilisateur: <br/><input type="text" name="nomUser"/></label><br/><br/>
<label> login: <br/><input type="text" name="login"/></label><br/><br/>
<label> mot de Passe:<br/><input type="password" name="passe"/></label><br/><br/>
<label> confirmation Mot de Passe:<br/> <input type="password" name="passe2"/></label><br/><br/>
<label> email: <br/><input type="email" name="mail"/></label><br/><br/>

<input type="submit" value="Connexion"><br/>            
<input type="submit" value="Inscription"/><br/><br/>
<input type="submit" value="Retour"/>

</form>
    
</body>
</html>