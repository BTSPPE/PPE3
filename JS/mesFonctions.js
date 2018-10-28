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

function popupmodificationdemande()
{
    $.ajax
(
    {
        type:"get",
        url:"index.php/indexAcceuilArthur/PopUpDModification",
        success:function(data)
        {
            $("#popDmodification").empty();
            $("#popDmodification").append(data);
            $("#popDmodification").modal();
        },
        error:function()
        {
            alert("Erreur d'affichage sur le popup de modification de demande");
        }
    }
);
}

function popupmodificationoffre()
{
    $.ajax
(
    {
        type:"get",
        url:"index.php/indexAcceuilArthur/PopUpOModification",
        success:function(data)
        {
            $("#popOmodification").empty();
            $("#popOmodification").append(data);
            $("#popOmodification").modal();
        },
        error:function()
        {
            alert("Erreur d'affichage sur le popup de modification d'offre");
        }
    }
);
}

function ajoutDemande(event) {
    var typeDemande = $("#selectdemande")[0].value;
    var descDemande = $("#descriptiondemande")[0].value;
    $.ajax({
        type: "post",
        url: "index.php/indexAcceuilArthur/AjoutDemande",
        data: {
            idService: typeDemande,
            descDemande: descDemande
        },
        success:function(alertdemande){
            alert("Succès de l'ajout de votre demande");
        }
    })
}

    function ajoutoffre(event) {
        var typeOffre = $("#selectoffre")[0].value;
        var descOffre = $("#descriptionoffre")[0].value;
        $.ajax({
            type: "post",
            url: "index.php/indexAcceuilArthur/AjoutOffre",
            data: {
                idService: typeOffre,
                descOffre: descOffre
            },
            success:function(alertoffre){
                alert("Succès de l'ajout de votre offre");
            }
        })
}
