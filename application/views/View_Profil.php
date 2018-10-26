<!DOCTYPE html>
<html>
    <head> <meta charset="utf-8">
        <title>Acceuil</title>
            <link rel="stylesheet" href="Bootstrap/css/bootstrap.css" />
            <link rel="stylesheet" href="http://localhost/ingetis/PPE3-1/CSS/StyleAcceuil.css" />
            <link rel="stylesheet" href="JQuery/jquery-ui.css" />
        <script type="text/javascript" src="JQuery/jquery-3.1.1.js"></script>
        <script type="text/javascript" src="JQuery/jquery-ui.js"></script>
        <script type="text/javascript" src="Bootstrap/js/bootstrap.bundle.js"></script>
        <script src="JS/mesFonctions.js"></script>    
    </head>
    <body>
    <header> 
        <nav>
            <div id="bandeau">
                    <div class="align">
                        <a href="view_AcceuilArthur.php">Acceuil</a>
                    </div>
                    <div class="align">
                        <a href="#offres">Offres</a>
                    </div>
                    <div class="align">
                        <a href="#demandes">Demandes</a>
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
    <?php
     foreach ($lesDemandes as $uneDemande)
     {
  ?>
      <div class="boite">
          <?php
           echo $uneDemande->nomService .'<br>'. $uneDemande->descriptionDemande.'<br>'. $uneDemande->dateDemande. "</div><br>";
     }
          ?>    

    </main>

    </body>
    </html>