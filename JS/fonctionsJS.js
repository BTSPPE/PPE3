//L

function AfficherInscription(idInscription)
{
    $.ajax(
        {
            type:"get",
            url:"index.php/Ctrl_Home/AfficherInscription",
            data:"idInscription="+idInscription,
            succes:function(data)
            {
                $('#divInscription').empty();
                $('#divInscription').append(data);
            },
            error:function()
            {
                alert('Erreur SQL');
            }

        }
    )
}