function AfficherLesOffres()
{

$.ajax
(
    {
        type:"get",
        url:"index.php/indexAcceuilArthur/GetAllOffres",
        data:"idSect="+idSecteur,
        success:function(data)
        {
            $("#offres").empty();
            $("#offres").append(offres);
        },
        error:function()
        {
            alert("Ereur d'affichage sur les offres");
        }
    }
);
}