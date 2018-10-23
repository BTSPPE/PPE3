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
        },
        error:function()
        {
            alert("Ereur d'affichage sur le popup d'ajout");
        }
    }
);

}

