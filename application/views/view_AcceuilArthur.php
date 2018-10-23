<!DOCTYPE html>
<html>
    <head> <meta charset="utf-8">
        <title>Acceuil</title>
            <link rel="stylesheet" href="Bootstrap/css/bootstrap.css" />
            <link rel="stylesheet" href="CSS/StyleAcceuil.css" />
            <link rel="stylesheet" href="JQuery/jquery-ui.css" />
    <script type="text/javascript" src="JQuery/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="JQuery/jquery-ui.js"></script>
    <script type="text/javascript" src="Bootstrap/js/bootstrap.bundle.js"></script>
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
        // $("#ajoutdemande").click(AjoutDemande)  
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
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Ajouter une demande
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1">
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        <div id=demandes>
            <?php
               foreach ($LesDemandes as $uneDemande)
               {
            ?>
                <div class="boite">
                    <?php
                     echo $uneDemande->nomService .'<br>'. $uneDemande->descriptionDemande.'<br>'. $uneDemande->dateDemande. "</div><br>";
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
    <script>
        $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
        })
    </script>
    </body>