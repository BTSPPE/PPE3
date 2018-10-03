<?php
class model_PPE3 extends CI_Model
{
    public function getAllOffres()
    {
        $offressql = $this->db->query("SELECT * from ");
        return $offressql->result();
    }
    public function getAllDemandes()
    {
        $demandessql=$this->db->query("SELECT  FROM  WHERE ")
        return $demandessql->result();
    }
}
?>