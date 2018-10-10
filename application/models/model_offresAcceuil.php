<?php
class Model_offresAcceuil extends CI_Model
{
    public function GetAllOffre()
    {
        $sql = $this->db->query('SELECT service.nomService, offre.descriptionOffre, offre.dateOffre
                                 FROM service, offre
                                 WHERE service.idService = offre.idService');
        return $sql->result();
    }
}
?>