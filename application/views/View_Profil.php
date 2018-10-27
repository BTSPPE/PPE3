<!DOCTYPE html>
<html>
    <head> <meta charset="utf-8">
        <title>MonProfil</title>
            <link rel="stylesheet" href="http://localhost/ingetis/PPE3-1/Bootstrap/css/bootstrap.css" />
            <link rel="stylesheet" href="http://localhost/ingetis/PPE3-1/CSS/StyleAcceuil.css" />
            <link rel="stylesheet" href="http://localhost/ingetis/PPE3-1/JQuery/jquery-ui.css" />
        <script type="text/javascript" src="http://localhost/ingetis/PPE3-1/JQuery/jquery-3.1.1.js"></script>
        <script type="text/javascript" src="http://localhost/ingetis/PPE3-1/JQuery/jquery-ui.js"></script>
        <script type="text/javascript" src="http://localhost/ingetis/PPE3-1/Bootstrap/js/bootstrap.bundle.js"></script>
        <script src="http://localhost/ingetis/PPE3-1/JS/mesFonctions.js"></script>    
    </head>
    <body>
    <header> 
        <nav>
            <div id="bandeau">
                    <div class="align">
                        <button type="button" class="btn btn-primary" id="Acceuil">Acceuil</button>
                        <div id="Acceuil"></div>
                    </div>
                    <?php
                    if ($this->session->isLogged==false)
                    {?>
                    <div class="align">
                    <button type="button" class="btn btn-primary" id="connexion">Connexion</button>
                    <div id="popconnexion"></div>
                    </div>
                    
                    <div class="align">
                    <button type="button" class="btn btn-primary" id="inscription">Inscription</button>
                    <div id="popinscription"></div>
                    </div>
                    <?php
                    }
                    else {
                        echo "<div class='align'>".$this->session->nomUser."</div><div class='align'> "."<img src='".$this->session->photoUser."' height='38'></div>";
                        ?>
                        <div class="align">
                    <button type="button" class="btn btn-primary" id="deconnexion">Déconnexion</button></div>
                        <?php
                    }
                    ?>
            </div>
        </nav>
    </header>
    <br><br><br><br><br><br>
    <main>
    <h3>Mes demandes</h3>
    <?php
     foreach ($lesDemandes as $uneDemande)
     {
  ?>
      <div class="boite">
          <?php
           echo $uneDemande->nomService .'<br>'. $uneDemande->descriptionDemande.'<br>'. $uneDemande->dateDemande. "</div><br>";
     }
          ?>    
    <h3>Mes Offres</h3>
    <?php
     foreach ($lesOffres as $uneOffre)
     {
  ?>
      <div class="boite">
          <?php
           echo $uneOffre->nomService .'<br>'. $uneOffre->descriptionOffre.'<br>'. $uneOffre->dateOffre. "</div><br>";
     }
          ?>    
    </main>
     <script>
        $(document).ready(function() {
            $("#deconnexion").click(function() {window.location.assign('Deconnexion')});
            $("#Acceuil").click(function() {window.location.assign('http://localhost/ingetis/PPE3-1/index.php')});
         });
     </script>
    </body>
    </html>