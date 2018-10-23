<?php
class Model_AjoutDemande extends CI_Model
{
    public function AjoutDemande()
    {
        $sql = $this->db->query('INSERT INTO demande (descriptionDemande, dateDemande, idService, idUser)
                                 VALUES ('', NOW(), , )');
        return $sql->result();
    }
}
?>