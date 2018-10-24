<?php
class Model_idOffre extends CI_Model
{
    public function GetOffres()
    {
        $sql = $this->db->query('SELECT MAX(idOffre)
                                 FROM Offre');
        return $sql->result();
    }
}
?>