<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/StyleAcceuil.css" />
    <script src="JS/mesFonctions.js"></script>
    <script src="JQuery/jquery-3.1.1.js"></script> 
</head>
<body>
<?php 
                foreach ($LesOffres as $uneOffre)
                {
?>
    <span class="boite">
<?php   
                      echo $uneOffre->nomService .'  '. $uneOffre->descriptionOffre.'  '. $uneOffre->dateOffre. "</span><br>";
                }
?>
</body>
