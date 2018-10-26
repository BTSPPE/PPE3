<?php
class Model_AjoutOffre extends CI_Model
{
    public function AjoutOffre()
    {
        $sql = $this->db->query('INSERT INTO offre (descriptionoffre, dateoffre, idService, idUser)
                                 VALUES ('', NOW(), , )');
        return $sql->result();
    }
}
?>