<!DOCTYPE html>
<html>
    <head> <meta charset="utf-8">
        <title>Acceuil</title>
        <link rel="stylesheet" href="Bootstrap/css/Bootstrap.css" />
        <link href="https://fonts.googleapis.com/css?family=Bellefair|Open+Sans:400,400i,600i,700" rel="stylesheet">
        <script src="JS/mesFonctions.js"></script>  
    <script type="text/javascript" src="jquery/jquery.js"></script>

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
    </head>
    
<header> 
<nav><table><tr><div id=bandeau><td><a href="Acceuil.html">Acceuil</a></td>    <td><a href="#offres">Offres</a></td>     <td><a href="#demandes">Demandes</a></td>       <td><a href="Profil.html">Mon Profil</a></td></div></tr></table></nav>
</header>
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <body>
        <main><div id=offres><h3>Les offres du moment</h3><p></p>
    <div id=demandes><h3>Les demandes du moment</h3><p></p>
    </body>
    <br><br><br><br><br>
    <footer>
    Mentions légales bla bla bla bla</footer>