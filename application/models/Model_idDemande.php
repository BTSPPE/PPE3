<?php
class Model_idDemande extends CI_Model
{
    public function GetDemandes()
    {
        $sql = $this->db->query('SELECT MAX(idDemande)
                                 FROM demande');
        return $sql->result();
    }
}
?>