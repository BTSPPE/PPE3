<?php
class model_demandesAcceuil extends CI_Model
{
    public function GetAllDemande()
    {
        $sql = $this->db->query('SELECT service.nomService, demande.descriptionDemande, demande.dateDemande
                                 FROM demande, service
                                 WHERE service.idService = demande.idService');
        return $sql->result();

        $sql2 = $this->db->query('SELECT demande.idService, service.nomService
                                  FROM demande, service
                                  WHERE demande.idService = service.idService');
        return $sql->result();
    }
}
?>