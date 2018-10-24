<?php
class Model_PopUp extends CI_Model
{
    public function GetPopUp()
    {
        $sql = $this->db->query('SELECT DISTINCT demande.idService, service.nomService, demande.idDemande
                                 FROM demande, service
                                 WHERE demande.idService = service.idService
                                 GROUP BY demande.idDemande');
        return $sql->result();
    }
}
?>