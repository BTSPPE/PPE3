function GetAllOffres()
{

$.ajax
(
    {
        type:"get",
        url:"index.php/indexAcceuilArthur/GetAllOffres",
        success:function(data)
        {
            $("#offres").empty();
            $("#offres").append(data);
        },
        error:function()
        {
            alert("Ereur d'affichage sur les offres");
        }
    }
);
}

function boutondemande()
{
    $.ajax
(
    {
        type:"get",
        url:"index.php/indexAcceuilArthur/BoutonDemande",
        success:function(data)
        {
            $("#ajoutdemande").empty();
            $("#ajoutdemande").append(data);
            $("#popupdemande").modal();
        },
        error:function()
        {
            alert("Erreur d'affichage sur le popup d'ajout de demande");
        }
    }
);

}

function boutonoffre()
{
    $.ajax
(
    {
        type:"get",
        url:"index.php/indexAcceuilArthur/BoutonOffre",
        success:function(data)
        {
            $("#ajoutoffre").empty();
            $("#ajoutoffre").append(data);
            $("#popupoffre").modal();
        },
        error:function()
        {
            alert("Erreur d'affichage sur le popup d'ajout d'offre");
        }
    }
);

}

function boutonconnexion()
{
    $.ajax
(
    {
        type:"get",
        url:"index.php/indexAcceuilArthur/BoutonConnexion",
        success:function(data)
        {
            $("#popconnexion").empty();
            $("#popconnexion").append(data);
            $("#popupconnexion").modal();
        },
        error:function()
        {
            alert("Erreur d'affichage sur le popup de connexion");
        }
    }
);

}


