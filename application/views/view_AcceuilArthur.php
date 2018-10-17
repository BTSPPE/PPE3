<!DOCTYPE html>
<html>
    <head> <meta charset="utf-8">
        <title>Acceuil</title>
            <link rel="stylesheet" href="Bootstrap/css/bootstrap.css" />
            <link rel="stylesheet" href="CSS/StyleAcceuil.css" />
    <script type="text/javascript" src="JQuery/jquery-3.1.1.js"></script>
    <script src="JS/mesFonctions.js"></script>
    <script type="text/javascript">
            $(document).ready(function(){
                $("body").css("display","none");
            });
        </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("body").css("display", "none");
            $("body").fadeIn(2000);
            $("a.transition").click(function(event){
                event.preventDefault();
                linkLocation = this.href;
                $("body").fadeOut(1000, redirectPage);
            });

            function redirectPage(){
                window.location = linkLocation;
            }
        });

    </script>

    <script>
        $(document).ready(function() {
            GetAllOffres();
        });
        $("#ajoutdemande").click(AjoutDemande)  
    </script>
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
                    <div class="align">
                        <a href="Profil.html">Mon Profil</a>
                    </div>
                    <div class="align">
                        <button id="connexion">Se connecter</a>
                    </div>
                    <div class="align">
                        <button id="inscription">S'inscrire</a>
                    </div>
            </div>
        </nav>
    </header>
    <br><br><br><br><br><br>
    
    <main>
        <h3>Les demandes du moment</h3>
        <button id="ajoutdemande" type= "button">Ajouter une demande</button><br><br>
        <div id=demandes>
            <?php
               foreach ($LesDemandes as $uneDemande)
               {
            ?>
                <span class="boite">
                    <?php
                     echo $uneDemande->nomService .'  '. $uneDemande->descriptionDemande.'  '. $uneDemande->dateDemande. "</span><br>";
                    ?>
                
            <?php
               }
            ?>    
        </div>    
        <br><br><br><br>
        <h3>Les offres du moment</h3>
        <button id="ajoutoffre" type= "button">Ajouter une offre</button>
        <div id=offres>
        </div>
        <br><br><br><br><br>
    </main>
    <footer>
    Mentions légales bla bla bla bla
    </footer>

    </body>